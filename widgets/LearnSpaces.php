<?php

namespace humhub\modules\learn4dev\widgets;

use humhub\modules\space\models\Space;
use humhub\modules\space\models\Membership;

/**
 * Shows newly created spaces as sidebar widget
 *
 * @package humhub.modules_core.directory.widgets
 * @since 0.11
 * @author Luke
 */
class LearnSpaces extends \yii\base\Widget
{

    public $showMoreButton = false;

    /**
     * Executes the widgets
     */
    public function run()
    {


        $query = Space::find();


        /**
         * Show private spaces only if user is member
         */
        $query->leftJoin('learning_portal', 'space.id=learning_portal.id');
        $query->where('learning_portal.id IS NOT NULL');
        $query->limit(20);
        $query->orderBy('name ASC');

        return $this->render('learnSpaces', array(
                    'newSpaces' => $query->all(),
                    'showMoreButton' => $this->showMoreButton
        ));
    }

}

?>
