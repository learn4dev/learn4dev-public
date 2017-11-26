<?php

use yii\helpers\Url;

return [
    'id' => 'learn',
    'container' => 'gallery',
    'learn-courses' =>
    [
        'label' => 'Courses',
        'position' => 100,
        'url' => Url::to(['/s/courses']),
        'description' => 'A selection of online courses and training '
        . 'opportunities offered by our partners and other learning '
        . 'institutions.  Subscription based individual learning paths.',
    ],
    'learn-publications' =>
    [

        'label' => 'Publications',
        'position' => 100,
        'url' => Url::to(['/s/publications']),
        'description' => 'A selection of published articles, videos and other '
        . 'online publications on diverse topics. Latest materials recommended '
        . 'by our expert groups. Resources to consult at all times.',
    ],
    'learn-toolbox' =>
    [
        'label' => 'Toolbox',
        'position' => 100,
        'url' => Url::to(['/s/toolbox']),
        'description' => 'Dedicated to trainers. Improve your training skills '
        . 'with the latest developed tools and innovations in learning. Get '
        . 'familiar with with new training techniques and methods. Learn about '
        . 'learning.',
    ],
];
