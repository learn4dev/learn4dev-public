<?php

use yii\helpers\Html;

$bg = $this->theme->getBaseUrl() . '/img/crumb.jpg';
?>
<div class="crumb">
    <img src="<?= $bg; ?>" alt="<?= Yii::t('base', 'Logo of {appName}', ['appName' => Html::encode(Yii::$app->name)]) ?>" id="img-logo"/>
</div> 