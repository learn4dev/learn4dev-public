<?= $this->render('@humhub/modules/learn4dev/views/common/head') ?>
<div  id="layout-content">
    <div class="container">

    </div>
    <div class="container thumbnail-gallery">
        <?= \humhub\modules\learn4dev\widgets\ThumbnailWidget::widget(['displayLabels' => false, 'data' => $model->content['relatedPages'], 'sm' => 3, 'md' => 3, 'lg' => 3]); ?>
    </div>
</div>
