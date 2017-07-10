<?php

return [
    'plugin' => [
        'navigation' => [
            'label' => 'YT Gallery',
            'sidemenu' => [
                'videos' => [
                    'label' => 'Videos'
                ],
                'playlists' => [
                    'label' => 'Playlists'
                ]
            ],
        ],
        'controllers' => [
            'videos' => [
                'list_toolbar' => [
                    'new_video' => 'New Video'
                ]
            ]
        ]
    ]
];