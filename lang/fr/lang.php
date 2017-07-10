<?php

return [
    'plugin' => [
        'navigation' => [
            'label' => 'Galerie YT',
            'sidemenu' => [
                'videos' => [
                    'label' => 'Vidéos'
                ],
                'playlists' => [
                    'label' => 'Listes de lecture'
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