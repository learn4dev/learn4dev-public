<?php

use humhub\modules\gallery\models\BaseGallery as Gallery;
use humhub\modules\gallery\models\Media;

$gallery = Gallery::findOne(['title' => 'Learning Section']);
$media = Media::findAll(['gallery_id' => $gallery->id]);
$topMediaItems = ['courses' => 0, 'publications' => 0, 'toolbox' => 0];
$portalMediaItems = [];
foreach ($media as $mediaItem) {
    if (in_array(str_replace('.png', '', strtolower($mediaItem->title)), array_keys($topMediaItems))) {
        $topMediaItems[strtolower($mediaItem->title)] = $mediaItem;
    } else {
        $portalMediaItems[] = $mediaItem;
    }
}
?>
<div class="container">
    <div id="layout-content">
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php ?>
                        <h3>Learning Section</h3>
                        <p><?= $gallery->description ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="display:flex;">
                <?php
                foreach ($topMediaItems as $item) {
                    if (!is_int($item)) {
                        echo '<div class="col-md-4"  style="display:flex"><div class="thumbnail" style="background:none;">';
                        echo \yii\helpers\Html::img($item->getFileUrl());
                        echo '<div class="caption">';
                        echo $item->description . '</div>';
                        echo '<p><a href="#" class="btn btn-primary" style="width:100%" role="button">LEARN MORE</a></p>';
                        echo '</div></div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>