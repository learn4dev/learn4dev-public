<?php

namespace humhub\modules\learn4dev\widgets;

/**
 * BirthdaySidebarWidget displays the users of upcoming birthdays.
 *
 * It is attached to the dashboard sidebar.
 *
 * @package humhub.modules.birthday.widgets
 * @author Sebastian Stumpf
 */
class ThumbnailWidget extends \yii\base\Widget
{

    public $data = [];
    public $xs = 2;
    public $sm = 3;
    public $md = 3;
    public $lg = 4;
    private $_order = ['xs', 'sm', 'md', 'lg'];

    public function run()
    {
        $columnClasses = $this->_initColumns();
        $hiddenClasses = $this->_initHiddenClasses($columnClasses);

        foreach ($columnClasses as $size => $columnClass) {

            $i = 0;
            $last = null;
            $hidden = $hiddenClasses[$size];
            foreach ($this->data as $data) {
                if ($i == 0) {
                    echo '<div class="row' . $hidden . '">';
                }
                $this->_outputThumbnail($data, $columnClass);
                $i++;
                $last = $this->$size;
                if ($i == $last) {
                    $i = 0;
                    echo '</div>';
                }
            }
            if ($i != $last) {
                echo '</div>';
            }
        }
    }

    private function _initColumns()
    {
        $columnClasses = [];
        $prev = null;
        foreach ($this->_order as $screenSize) {
            if ($prev != $this->$screenSize) {

                $columnClasses[$screenSize] = 'col-' . $screenSize . '-' . (string) (12 / $this->$screenSize);
                $prev = $this->$screenSize;
            }
        }

        return $columnClasses;
    }

    private function _initHiddenClasses($columClasses)
    {
        //Initialisation
        $hiddenClasses = [];
        $active = array_keys($columClasses);
        foreach ($active as $size) {
            $hiddenClasses[$size] = $this->_getHiddenClass($columClasses, $size);
        }
        return $hiddenClasses;
    }

    private function _getHiddenClass($columnClasses, $size)
    {
        $enabled = true;
        $hiddenClasses = '';
        foreach ($this->_order as $screenSize) {
            if (isset($columnClasses[$screenSize])) {
                $enabled = true;
            }
            if ($screenSize == $size) {
                $enabled = false;
            }
            if ($enabled) {
                $hiddenClasses .= ' hidden-' . $screenSize;
            }
        }
        return $hiddenClasses;
    }

    private function _outputThumbnail($data, $columnClass)
    {
        ?>
        <div class="<?= $columnClass ?>">
            <a href="<?= $data['url'] ?>" class="thumbnail">
                <img src="<?= $data['image'] ?>" alt="<?= $data['id'] . ' Image' ?>">
                <h4><?= $data['label'] ?></h4>
                <p><?= $data['description'] ?></p>
            </a>

        </div>
        <?php
    }

}
