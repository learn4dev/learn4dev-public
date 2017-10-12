<?php

use yii\helpers\Url;

return [
    [
        'id' => 'about-core-group',
        'url' => Url::to(['/public/about/core-group']),
        'label' => 'Core Group',
        'description' => 'The core Group serves as a board for the network and'
        . ' meet four times a year.',
    ],
    [
        'id' => 'about-expert-groups',
        'url' => Url::to(['/public/about/expert-groups']),
        'label' => 'Expert Groups',
        'description' => 'The essence of the network. Joint '
        . 'initiatives covering a wide range of expertise.',
    ],
    [
        'id' => 'about-focal-points',
        'url' => Url::to(['/public/about/focal-points']),
        'label' => 'Focal Points',
        'description' => 'Focal Points are the link between member'
        . ' organisations\' staff and the learn4dev network.',
    ],
    [
        'id' => 'about-annual-meeting',
        'label' => 'Annual Meeting',
        'url' => Url::to(['/public/about/annual-meeting']),
        'description' => 'The network meets each year for a joint learning exchange'
        . ' and to decide on future strategies',
    ],
];
