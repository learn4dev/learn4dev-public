<?= $this->render('@humhub/modules/learn4dev/views/common/head') ?>

<div id="layout-content">
    <div class="container">
        <?php ?>
        <h3>Expert Groups</h3>
        <p>
            Expert Groups are a major pillar of the learn4dev network.
            Each is founded when at least three members of the network 
            propose to form a group and join efforts to work on a 
            specific topic. While some groups might choose to focus on 
            knowledge sharing, others work towards developing learning 
            programmes or training materials.


        </p>
        <p>
            Besides regular exchange 
            among members of an Expert Group, each selects a leader to 
            represent the Expert Group and reports on its activities at learn4dev’s Annual Meeting.

        </p>
        <h3>Expert Group Spaces</h3>
        <?= \humhub\modules\learn4dev\widgets\ExpertSpaces::widget(); ?>
    </div>


</div>

