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
                'relation' => [
                    'label' => 'video'
                ],
                'list_toolbar' => [
                    'new' => 'New Video'
                ],
                'create' => [
                    'title' => 'Create Video',
                    'return' => 'Return to videos list'
                ],
                'update' => [
                    'title' => 'Edit Video'
                ]
            ],
            'playlists' => [
                'name' => 'Playlist',
                'breadcrumbs' => 'Playlists',
                'relation' => [
                    'label' => 'playlist'
                ],
                'list_toolbar' => [
                    'new' => 'New Playlist'
                ],
                'create' => [
                    'title' => 'Create Playlist',
                    'return' => 'Return to playlists'
                ],
                'update' => [
                    'title' => 'Edit Playlist'
                ]
            ]
        ],
        'models' => [
            'video' => [
                'columns' => [
                    'title' => 'Title',
                    'yt_watch' => 'YouTube video ID',
                    'published' => 'Published',
                    'order' => 'Order'
                ],
                'fields' => [
                    'title' => 'Video title',
                    'yt_watch' => 'YouTube Video ID',
                    'published' => 'Published',
                    'order' => 'Video display priority in playlists'
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