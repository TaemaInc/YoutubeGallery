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
                    'new_video' => 'Nouvelle vidéo'
                ]
            ]
        ],
        'models' => [
            'video' => [
                'columns' => [
                    'title' => 'Titre',
                    'yt_watch' => 'ID vidéo YouTube',
                    'published' => 'Publiée'
                ],
                'fields' => [
                    'title' => 'Titre du vidéo',
                    'yt_watch' => 'ID vidéo YouTube',
                    'published' => 'Publiée'
                ],
                'attributes' => [
                    'title' => 'titre',
                    'yt_watch' => 'ID vidéo YouTube'
                ]
            ]
        ]
    ]
];