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
    public $openTab = false;
    public $xs = 2;
    public $sm = 3;
    public $md = 3;
    public $lg = 4;
    public $displayLabels = true;
    private $_order = ['xs', 'sm', 'md', 'lg'];

    public function run()
    {
        $columnClasses = $this->_initColumns();
        $hiddenClasses = $this->_initHiddenClasses($columnClasses);

        $flag = false;

        foreach ($columnClasses as $size => $columnClass) {

            $i = 0;
            $last = null;
            $hidden = $hiddenClasses[$size];
            foreach ($this->data as $data) {
                if ($i == 0) {
                    echo '<div class="row' . $hidden . '">' . PHP_EOL;
                }
                $this->_outputThumbnail($data, $columnClass);
                $i++;
                $last = $this->$size;
                if ($i == $last) {
                    $i = 0;
                    echo '</div>' . PHP_EOL;
                }
            }
            if ($i != 0) {
        //        echo 'closing for' . $size . 'at' . $i;
                echo '</div>' . PHP_EOL;
            }
        }
    }

    /**
     * 
     * Constructs an array for iteration of format:
     * [['xs'=>'col-xs-6,'sm'=>'col-sm-4','lg'=>'col-lg-3']]
     * 
     * @return string[]
     */
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


        if (substr($data['image'], 0, strlen('@theme')) == '@theme') {
            $data['image'] = str_replace('@theme', $this->view->theme->getBaseUrl(), $data['image']);
        }
        ?>
        <div class="<?= $columnClass ?>">
            <a href="<?= $data['url'] ?>" <?= $this->openTab ? 'target="_blank" ' : '' ?>class="thumbnail">
                <img src="<?= $data['image'] ?>" alt="<?= $data['id'] . ' Image' ?>">
                <?php
                if ($this->displayLabels) {
                    ?>
                    <h5><?= $data['label'] ?></h5>
                    <?php
                }
                ?>
                <p class="thumb-description"><?= $data['description'] ?></p>
            </a>

        </div>
        <?php
    }

}
