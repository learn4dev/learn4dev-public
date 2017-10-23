<?php

use yii\helpers\Html;

$records = include_once str_replace('views/common', 'static/meta/records.php', __DIR__);
$meta = $records[Yii::$app->controller->getRoute()];
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

<?php
$this->setPageTitle($meta['title']);
?>