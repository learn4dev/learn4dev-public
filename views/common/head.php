<?php

use yii\helpers\Html;

$records = include_once str_replace('views/common', 'static/meta/records.php', __DIR__);
$meta = $records[Yii::$app->controller->getRoute()];

$imgPath = $this->theme->getBaseUrl() . '/img';
$switch = false;
//Set fallback image
$image = $imgPath . '/logo.png';
$overwritePath = $_SERVER['DOCUMENT_ROOT'] . $imgPath . $meta['img'] . '.png';
//Override fallback image if possible
if (file_exists($overwritePath)) {
    $switch = true;
    $image = $imgPath . $meta['img'] . '.png';
}

$metaImage = $_SERVER['DOCUMENT_ROOT'] . $image;


$this->setPageTitle($meta['title']);
$this->registerMetaTag(['name' => 'description', 'content' => $meta['description']]);

//Schema.org markup for Google+
$this->registerMetaTag(['itemprop' => 'name', 'content' => $meta['title']]);
$this->registerMetaTag(['itemprop' => 'description', 'content' => $meta['description']]);
$this->registerMetaTag(['itemprop' => 'image', 'content' => $metaImage]);


//Twitter card data
$this->registerMetaTag(['name' => 'twitter:title', 'content' => $meta['title']]);
$this->registerMetaTag(['name' => 'twitter:description', 'content' => $meta['description']]);
$this->registerMetaTag(['name' => 'twitter:image:src', 'content' => $metaImage]);

//Open graph data
$this->registerMetaTag(['property' => 'og:title', 'content' => $meta['title']]);
$this->registerMetaTag(['propery' => 'og:description', 'content' => $meta['description']]);
$this->registerMetaTag(['propery' => 'og:image', 'content' => $metaImage]);


$bg = $this->theme->getBaseUrl() . '/img/crumb.jpg';
?>
<style>
    body{
        background:white;
    } 
</style>


<div class="crumb">
    <img src="<?= $bg; ?>" alt="<?= Yii::t('base', 'Logo of {appName}', ['appName' => Html::encode(Yii::$app->name)]) ?>" id="img-logo"/>
</div> 

