<?php

use yii\helpers\Html;
use yii\helpers\Url;

echo $this->render('@humhub/modules/learn4dev/views/common/crumb');
?>
<style>
    body{
        background:white;
    } 
</style>
<div id="layout-content">
    <div class="container">
        <h3>Portal</h3>
        <p>Take a look at the learning platforms offered by learn4dev partner organisations.</p> 
    </div>

    <div class="container thumbnail-gallery">
        <?= \humhub\modules\learn4dev\widgets\ThumbnailWidget::widget(['openTab' => true, 'data' => $model->content['partnerResources'], 'sm' => 3, 'md' => 3, 'lg' => 3]); ?>
    </div>

    <div class="container">
        <h3>Other Useful resources</h3>
    </div>

    <div class="container thumbnail-gallery">
        <?= \humhub\modules\learn4dev\widgets\ThumbnailWidget::widget(['openTab' => true, 'data' => $model->content['otherResources'], 'sm' => 3, 'md' => 3, 'lg' => 3]); ?>
    </div>
</div>


