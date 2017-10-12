<?php

use yii\helpers\Html;
use yii\helpers\Url;

echo $this->render('@humhub/modules/learn4dev/views/common/crumb');
$members = $this->theme->getBaseUrl() . '/img/members.jpg';

$relatedPages = [
    [
        'id' => 'about-core-group',
        'url' => Url::to(['/public/about/core-group']),
        'text' => '<h4>Core group</h4>The core Group serves as a board for the network and'
        . ' meet four times a year.',
        'image' => $this->theme->getBaseUrl() . '/img/about-core-group.png'
    ],
    [
        'id' => 'about-expert-groups',
        'url' => Url::to(['/public/about/expert-groups']),
        'text' => '<h4>Expert groups</h4>he essence of the network. Joint '
        . 'initiatives covering a wide range of expertise.',
        'image' => $this->theme->getBaseUrl() . '/img/about-expert-groups.png'
    ],
    [
        'id' => 'about-focal-points',
        'url' => Url::to(['/public/about/focal-points']),
        'text' => '<h4>Focal points</h4>Focal Points are the link between member'
        . ' organisations\' staff and the learn4dev network.',
        'image' => $this->theme->getBaseUrl() . '/img/about-focal-points.png'
    ],
    [
        'id' => 'about-annual-meeting',
        'url' => Url::to(['/public/about/annual-meeting']),
        'text' => '<h4>Annual Meeting</h4>The network meets each year for a joint learning exchange'
        . ' and to decide on future strategies',
        'image' => $this->theme->getBaseUrl() . '/img/about-annual-meeting.png'
    ],
];
?>
<div id="static">
    <div class="container">
        <div id="layout-content">
            <div class="container">
                <?php ?>
                <h3>about learn4dev</h3>
                <p>
                    <strong>Learn4dev</strong> is an international network of development organisations
                    from different backgrounds. We work together to provide better 
                    learning opportunities for our staff and partners. 
                    Donor collaboration enhances aid efficiency for poverty reduction.
                </p>
                <p>
                    (read the learn4dev history – pdf file)
                <p>
                    The network is not formalised nor has its own staff or secretariat.
                    It exists thanks to the commitment of its members to contribute to 
                    more efficient aid. It thereby benefits from its informal and thus
                    flexible structure.
                </p>
                (read our charter – pdf file)
                <p>
                    The essence of the learn4dev network are the Expert Groups. 
                    Each group is created around a specific topic or common area of 
                    interest and is moderated by an Expert Group leader. Within the 
                    Expert Groups, members work together on training initiatives, 
                    the co-creation of tools or the sharing of knowledge.
                </p>   
                <p>
                    The general coordination of the network is done by the members of the Core Group.
                    This troika includes the organisers of last year’s annual meeting,
                    the current annual meeting and next year’s, the chair of the 
                    network, the expert group leader and the communication team.
                </p>
                <p>
                    Finally, once a year, all members of the network meet at the Annual 
                    Meeting. It is a unique opportunity to gather experts and partners 
                    to set together the strategic objectives of the network.
                </p>
                <p>
                    Today the network counts 30 member organisations including bilateral
                    donor organisations, multilateral organisations and international 
                    training and research centres. Focal points are crucial links 
                    between member organisation and the network. 
                </p>
                <br>
                <img class="img-responsive" src="<?= $members; ?>" alt="<?= Yii::t('base', 'Logo of {appName}', ['appName' => Html::encode(Yii::$app->name)]) ?>" id="img-logo"/>
                <br>
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
            <?= \humhub\modules\learn4dev\widgets\ThumbnailWidget::widget(['data' => $relatedPages, 'sm' => 4, 'md' => 4, 'lg' => 4]); ?>



        </div>
    </div>
</div>

<div class="container">
    <div class="row" id="history-video">
        <div class="col-md-6" id="history-video-text">
            <h4>
                Want to find out more?
            </h4>
            Watch the video or visit our history.

        </div>

        <div class="col-md-6"><iframe width="560" height="315" src="https://www.youtube.com/embed/fustwYQdRBQ" frameborder="0" allowfullscreen></iframe></div>
    </div>
</div>
