<div class="static" id="layout-content">
    <div class="container">
        <h3>Learning Section</h3> 
    </div>
    <div class="container thumbnail-gallery">
        <?= \humhub\modules\learn4dev\widgets\ThumbnailWidget::widget(['displayLabels' => false, 'data' => $model->content['relatedPages'], 'sm' => 3, 'md' => 3, 'lg' => 3]); ?>
    </div>
</div>
