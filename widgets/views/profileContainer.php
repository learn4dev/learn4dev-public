<?php

use \humhub\modules\user\widgets\Image;
use yii\helpers\Html;
?>

<div class="<?= $columnClass ?> panel">
    <table id="profiles">
        <tr>
            <td colspan="2"><h5><?= $profile->title ?></h5></td>
        </tr>
        <tr>
            <td style ="padding:10px;padding-left: 0px;"><?= Image::widget(['user' => $model, 'width' => 40, 'showTooltip' => true]) ?></td>
            <td>
                <strong><?= $profile->firstname . ' ' . strtoupper($profile->lastname) ?></strong><br>
                <?= Html::a($profile->organisation, $profile->organisation_hyperlink) ?><br>
            </td>
        </tr>
    </table>

</div>