<?php

return [
    'common' => [
        'create' => 'Create',
        'create_and_close' => 'Create and Close',
        'save' => 'Save',
        'save_and_close' => 'Save and Close',
        'cancel' => 'Cancel',
        'created_at' => 'Created',
        'updated_at' => 'Last modification'
    ],
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
                'name' => 'Video',
                'breadcrumbs' => 'Videos',
                'list_toolbar' => [
                    'new' => 'New Video'
                ],
                'create' => [
                    'title' => 'Create Video',
                    'return' => 'Return to videos list'
                ],
                'update' => [
                    'tile' => 'Edit Video'
                ]
            ],
            'playlists' => [
                'name' => 'Playlist',
                'breadcrumbs' => 'Playlists',
                'list_toolbar' => [
                    'new' => 'New Playlist'
                ],
                'create' => [
                    'title' => 'Create Playlist',
                    'return' => 'Return to playlists'
                ],
                'update' => [
                    'tile' => 'Edit Playlist'
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
            ],
            'playlist' => [
                'columns' => [
                    'name' => 'Name',
                    'video_count' => 'Number of videos'
                ],
                'fields' => [
                    'name' => 'Name',
                ],
                'attributes' => [
                    'name' => 'name'
                ]
            ]
        ]
    ]
];