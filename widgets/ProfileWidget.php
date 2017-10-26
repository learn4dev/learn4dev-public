<?php

namespace humhub\modules\learn4dev\widgets;

use Yii;
use humhub\modules\user\models\User;

/**
 * Shows newly created spaces as sidebar widget
 *
 * @package humhub.modules_core.directory.widgets
 * @since 0.11
 * @author Luke
 */
class ProfileWidget extends \yii\base\Widget
{

    public $xs = 2;
    public $sm = 2;
    public $md = 4;
    public $lg = 4;
    public $displayLabels = true;
    private $_order = ['xs', 'sm', 'md', 'lg'];

    /**
     * Executes the widgets
     */
    public function run()
    {
        $models = $this->_getData();

        $columnClasses = $this->_initColumns();
        $hiddenClasses = $this->_initHiddenClasses($columnClasses);

        $flag = false;

        foreach ($columnClasses as $size => $columnClass) {

            $i = 0;
            $last = null;
            $hidden = $hiddenClasses[$size];
            foreach ($models as $model) {

                if ($i == 0) {
                    echo '<div class="row' . $hidden . '">' . PHP_EOL;
                }

                echo $this->render('profileContainer', array(
                    'model' => $model, 'profile' => $model->profile,
                    'columnClass' => $columnClass
                ));

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

    private function _getData()
    {
        $query = User::find();
        $query->leftJoin('profile', 'user.id=profile.user_id');
        /**
         * Show private spaces only if user is member
         */
        $query->where('core_index IS NOT NULL AND core_index >= 7000 AND core_index <= 7999');
        $query->limit(20);
        $query->orderBy('core_index ASC');
        return $query->all();
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

}
?>
