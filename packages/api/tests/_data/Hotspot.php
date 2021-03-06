<?php
return [
    [
        'id'                => 1001,
        'screenId'          => 1001,
        'hotspotTemplateId' => null,
        'type'              => 'url',
        'left'              => 0,
        'top'               => 100,
        'width'             => 100,
        'height'            => 200,
        'settings'          => "{\"url\": \"https://presentator.io\"}",
        'createdAt'         => '2019-06-28 01:00:00',
        'updatedAt'         => '2019-06-28 01:00:00',
    ],
    [
        'id'                => 1002,
        'screenId'          => null,
        'hotspotTemplateId' => 1001,
        'type'              => 'url',
        'left'              => 0,
        'top'               => 100,
        'width'             => 100,
        'height'            => 200,
        'settings'          => "{\"url\": \"https://presentator.io\"}",
        'createdAt'         => '2019-06-28 02:00:00',
        'updatedAt'         => '2019-06-28 02:00:00',
    ],
    [
        'id'                => 1003,
        'screenId'          => 1005,
        'hotspotTemplateId' => null,
        'type'              => 'screen',
        'left'              => 0,
        'top'               => 100,
        'width'             => 100,
        'height'            => 200,
        'settings'          => "{\"screenId\": 1006, \"transition\": \"none\"}",
        'createdAt'         => '2019-06-28 03:00:00',
        'updatedAt'         => '2019-06-28 03:00:00',
    ],
    [
        'id'                => 1004,
        'screenId'          => null,
        'hotspotTemplateId' => 1006,
        'type'              => 'url',
        'left'              => 0,
        'top'               => 50,
        'width'             => 50,
        'height'            => 50,
        'settings'          => "{\"url\": \"https://presentator.io\"}",
        'createdAt'         => '2019-06-28 04:00:00',
        'updatedAt'         => '2019-06-28 04:00:00',
    ],
    [
        'id'                => 1005,
        'screenId'          => null,
        'hotspotTemplateId' => 1006,
        'type'              => 'url',
        'left'              => 100,
        'top'               => 100,
        'width'             => 30,
        'height'            => 60,
        'settings'          => "{\"url\": \"https://presentator.io\"}",
        'createdAt'         => '2019-06-28 05:00:00',
        'updatedAt'         => '2019-06-28 05:00:00',
    ],
];
