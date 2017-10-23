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
class ExpertSpaces extends \yii\base\Widget
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
        $query->leftJoin('expert_group', 'space.id=expert_group.id');
        $query->where('expert_group.id IS NOT NULL');
        $query->limit(20);
        $query->orderBy('name ASC');

        return $this->render('expertSpaces', array(
                    'newSpaces' => $query->all(),
                    'showMoreButton' => $this->showMoreButton
        ));
    }

}

?>
