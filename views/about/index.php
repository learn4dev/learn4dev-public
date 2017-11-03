<?php

use yii\helpers\Html;
use yii\helpers\Url;

echo $this->render('@humhub/modules/learn4dev/views/common/head');

$path = $this->theme->getBaseUrl() . '/img/about/';
?>

<div id="layout-content">
    <div class="container">
        <?php ?>

        <p>
            <strong>Learn4dev</strong> is an international network of development organisations
            from different backgrounds. We work together to provide better 
            learning opportunities for our staff and partners. 
        </p>
        <p style="margin:25px;text-align:center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/qPfJz1QNyrI" frameborder="0" allowfullscreen></iframe>
        </p>

        <p>
            The network is not formalised nor has its own staff or secretariat.
            It exists thanks to the commitment of its members to 
            contribute to more efficient aid. It thereby benefits from 
            its informal and thus flexible structure.
        </p>
        <p>

            <a href="<?= $path . 'learn4dev-charter-1706.pdf' ?>" download target="_blank">read our charter – pdf file</a> 
        </p>
        <p>
            The essence of the learn4dev network are the Expert Groups. 
            Each group is created around a specific topic or common area of 
            interest and is moderated by an Expert Group leader. Within the 
            Expert Groups, members work together on training initiatives, 
            the co-creation of tools or the sharing of knowledge.
        </p>   
        <p>
            <a href="<?= $path . 'learn4dev-history.pdf' ?>" download target="_blank">read our history – pdf file</a> 
        </p>
        <p>
            The evolution of the learn4dev network took place against the 
            background of global paradigm shifts. 
            From the Rome Declaration on Harmonisation (2003) over the
            Millennium Goals (2000), the Busan agreement (2012) and today's
            Sustainable Development Goals (2015), the network has always 
            positioned itself within the evolutions and changes in the 
            global development agenda. Click on the links to understand more
            on the global development framework. 
        </p>

    </div>
    <div class="container thumbnail-gallery">
        <?= \humhub\modules\learn4dev\widgets\ThumbnailWidget::widget(['displayLabels' => false, 'data' => $model->content['relatedPages'], 'sm' => 4, 'md' => 4, 'lg' => 4]); ?>
    </div>
    <div class="container">
        <p>
            Today the network counts 30 member organisations including bilateral
            donor organisations, multilateral organisations and international 
            training and research centres. Focal points are crucial links 
            between member organisation and the network. 
        </p>
    </div>
    <div class="container thumbnail-gallery" style="">
        <?= \humhub\modules\learn4dev\widgets\ThumbnailWidget::widget(['openTab' => true, 'displayLabels' => false, 'data' => $model->content['members'], 'sm' => 4, 'md' => 4, 'lg' => 4]); ?>
    </div>
</div>