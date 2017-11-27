<?= $this->render('@humhub/modules/learn4dev/views/common/head') ?>
<div id="layout-content">
    <div class="container">

        <p>
            Focal points are responsible for:
        <ul>
            <li>Ensuring visibility of the training and learning activities developed by his/her organization and open for the learn4dev members by publishing the information on the learn4dev website;</li>
            <li>Disseminating information about learning opportunities provided by other learn4devmembers among the colleagues of his/her organization;</li>
            <li>Coordinating needs and contributions of the members of the expert groups of his/her organization with learn4dev, including proposals of new burning issues;</li>
            <li>Motivating colleagues to join expert groups.</li>

        </ul>
        </p>


    </div>
    <?= \humhub\modules\learn4dev\widgets\ProfileWidget::widget(['prefix' => 'focal_point', 'label' => '<h3>Organisation Focal Points</h3>']); ?>

</div>
