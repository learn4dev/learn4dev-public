<?php

namespace humhub\modules\learn4dev\widgets;

use humhub\modules\space\models\Space;
use humhub\modules\space\models\Membership;
use humhub\modules\learn4dev\widgets\ThumbnailWidget;

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
    public $aside = false;

    /**
     * Executes the widgets
     */
    public function run()
    {

        $data = $this->_getData();

        return $this->aside ? $this->render('expertSpaces', array(
                    'newSpaces' => $data,
                    'showMoreButton' => $this->showMoreButton,
                    'aside' => $this->aside,
                )) : ThumbnailWidget::widget([ 'data' => $data, 'sm' => 4, 'md' => 4, 'lg' => 4]);




        //return humhub\modules\learn4dev\widgets\ThumbnailWidget::widget(['displayLabels' => false, 'data' => $data, 'sm' => 4, 'md' => 4, 'lg' => 4]);
    }

    private function _getData()
    {
        $query = Space::find();
        $query->leftJoin('expert_group', 'space.id=expert_group.id');
        $query->where('expert_group.id IS NOT NULL');
        $query->limit(20);
        $query->orderBy('name ASC');
        $data = $query->all();
        if ($this->aside) {
            return $data;
        }

        $formatter = function($record) {
            return [
                'id' => $record->id,
                'label' => $record->name,
                'url' => $record->getUrl(),
                'image' => $record->getProfileImage()->getUrl()
            ];
        };
        var_dump($data);
        return array_map($formatter, $data);
    }

}

?>
