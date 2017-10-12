<?php
$relatedPages = $model->content['relatedPages'];
$path = $this->theme->getBaseUrl() . '/img/learn/';
foreach ($relatedPages as &$data) {
    if (!isset($data['image'])) {
        $data['image'] = $path . $data['id'] . '.png';
    }
}
?>
<div id="static">
    <div class="container">
        <div id="layout-content">
            <div class="container">
                <h3>Learning Section</h3> 
            </div>
            <div class="container">
                <?= \humhub\modules\learn4dev\widgets\ThumbnailWidget::widget(['data' => $relatedPages, 'sm' => 3, 'md' => 3, 'lg' => 3]); ?>
            </div>
        </div>
    </div>
</div>