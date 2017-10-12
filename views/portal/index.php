<?php

use yii\helpers\Html;
use yii\helpers\Url;

echo $this->render('@humhub/modules/learn4dev/views/common/crumb');


//$defaultPartnerPlatforms = include_once '../../modules/learn4dev/content/_platform_partners.php';
$partnerData = include_once str_replace('views/portal', 'content/learning_platforms_partners.php', __DIR__);
$otherData = include_once str_replace('views/portal', 'content/learning_platforms_other.php', __DIR__);
$path = $this->theme->getBaseUrl() . '/img/platform/';
foreach ($partnerData as &$data) {
    if (!isset($data['image'])) {
        $data['image'] = $path . $data['id'] . '.png';
    }
}
?>
<div id="static">
    <div class="container">
        <div id="layout-content">
            <div class="container">
                <h3>Portal</h3>
                Here a look at the learning platforms offered by learn4dev partner organisations. 
            </div>

            <div class="container">

                <?= \humhub\modules\learn4dev\widgets\ThumbnailWidget::widget(['data' => $partnerData, 'sm' => 3, 'md' => 3, 'lg' => 3]); ?>
            </div>
        </div>
    </div>
</div>

