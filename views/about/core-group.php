<?= $this->render('@humhub/modules/learn4dev/views/common/head') ?>
<div id="layout-content">
    <div class="container">
        <?php ?>

        <p>
            Learn4dev's Core Group serves as a board for the network. 
            It includes members who are organisers of the most recent 
            and forthcoming Annual Meetings. As all members are expected
            to help organise an Annual Meeting at some point, each will 
            have an opportunity to participate in the Core Group as well.     
        </p>
        <p>
            The Core Group typically meets four times a year. 
            While the Core Group requires extraordinary commitment 
            from members, its meetings can be held at the offices of 
            learn4dev members who are not part of the Core Group, 
            including back-to-back with meetings of 
            one or more Expert Groups.
        </p>

        <?= \humhub\modules\learn4dev\widgets\ProfileWidget::widget(['prefix' => 'core_group']); ?>
        <p style="margin-top:20px">
            To contact all current and former Core Group members,
            visit the network's LinkedIn page in the footer of this page.

        </p>
    </div>


</div>
