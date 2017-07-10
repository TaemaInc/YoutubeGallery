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
        ],
        'models' => [
            'video' => [
                'columns' => [
                    'title' => 'Title',
                    'yt_watch' => 'YouTube video ID',
                    'published' => 'Published'
                ],
                'fields' => [
                    'title' => 'Video title',
                    'yt_watch' => 'YouTube Video ID',
                    'published' => 'Published'
                ],
                'attributes' => [
                    'title' => 'title',
                    'yt_watch' => 'YouTube video ID'
                ]
            ]
        ]
    ]
];