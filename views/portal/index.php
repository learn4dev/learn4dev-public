<?php

use yii\helpers\Html;
use yii\helpers\Url;

echo $this->render('@humhub/modules/learn4dev/views/common/crumb');
?>
<div id="static">
    <div class="container">
        <div id="layout-content">
            <div class="container">
                <h3>Portal</h3>
                Take a look at the learning platforms offered by learn4dev partner organisations. 
            </div>

            <div class="container">
                <?= \humhub\modules\learn4dev\widgets\ThumbnailWidget::widget(['data' => $model->content['partnerResources'], 'sm' => 3, 'md' => 3, 'lg' => 3]); ?>
            </div>
        </div>
    </div>
</div>

