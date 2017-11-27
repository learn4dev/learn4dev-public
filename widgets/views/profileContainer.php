<?php

use \humhub\modules\user\widgets\Image;
use yii\helpers\Html;

$role = $prefix . '_role';

?>

<div class="<?= $columnClass ?> panel">
    <table id="profiles">
        <tr>
            <td colspan="2"><h5><?= $profile->$role ?></h5></td>
        </tr>
        <tr>
            <td style ="width: 50px; padding:10px;padding-left: 0px;"><?= Image::widget(['user' => $model, 'width' => 40, 'showTooltip' => true]) ?></td>
            <td>
                <strong><?= ucwords($profile->firstname) . ' ' . strtoupper($profile->lastname) ?></strong><br>
                <?= Html::a($profile->organisation, $profile->organisation_hyperlink) ?>
            </td>
        </tr>
    </table>

</div>