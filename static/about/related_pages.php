<?php

use yii\helpers\Url;

return [
    'id' => 'about',
    'container' => 'gallery',
    'about-core-group' =>
    [
        'url' => Url::to(['/public/about/core-group']),
        'position' => 100,
        'label' => 'Core Group',
        'description' => 'The core Group serves as a board for the network and'
        . ' meet four times a year.',
    ],
    'about-expert-groups' =>
    [
        'url' => Url::to(['/public/about/expert-groups']),
        'position' => 200,
        'label' => 'Expert Groups',
        'description' => 'The essence of the network. Joint '
        . 'initiatives covering a wide range of expertise.',
    ],
    'about-focal-points' =>
    [

        'url' => Url::to(['/public/about/focal-points']),
        'position' => 300,
        'label' => 'Focal Points',
        'description' => 'Focal Points are the link between member'
        . ' organisations\' staff and the learn4dev network.',
    ],
    'about-annual-meeting' =>
    [
        'label' => 'Annual Meeting',
        'position' => 400,
        'url' => Url::to(['/public/about/annual-meeting']),
        'description' => 'The network meets each year for a joint learning exchange'
        . ' and to decide on future strategies',
    ],
];
