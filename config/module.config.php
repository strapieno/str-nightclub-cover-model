<?php
return [
    'imgman_mongodb' => [
        'Mongo\Db\Image' => [
            'database' => 'strapieno-image',
        ],
    ],
    'imgman_adapter_mongo' => [
        'ImgMan\Mongo\NightClubCover' => [
            'collection' => 'nightclub-cover',
            'database' => 'Mongo\Db\Image',
            'identifier' => 'identifier'
        ],
    ],
    'imgman_services' => [
        'ImgMan\Service\NightClubCover' => [
            'adapter' => 'ImgMan\Adapter\Imagick',
            'storage' => 'ImgMan\Mongo\NightClubCover',
            'helper_manager' => 'ImgMan\PluginManager',
            'renditions' => [
                'thumb' => [
                    'fitOut' => [
                        'width' => 800,
                        'height' => 300
                    ],
                    'format' => [
                        'format' => 'jpeg'
                    ],
                ],
                'normal' => [
                    'fitOut' => [
                        'width' => 80,
                        'height' => 30,
                        'allowUpsample' => true
                    ],
                    'format' => [
                        'format' => 'jpeg'
                    ]
                ]
            ]
        ]
    ],
];
