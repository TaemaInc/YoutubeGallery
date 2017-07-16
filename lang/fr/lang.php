<?php

return [
    'common' => [
        'create' => 'Créer',
        'create_and_close' => 'Créer et Fermer',
        'save' => 'Sauvegarder',
        'save_and_close' => 'Sauvegarder and Fermer',
        'cancel' => 'Annuler',
        'created_at' => 'Création',
        'updated_at' => 'Dernière modification'
    ],
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
                'name' => 'Vidéo',
                'breadcrumbs' => 'Vidéos',
                'relation' => [
                    'label' => 'vidéo'
                ],
                'list_toolbar' => [
                    'new' => 'Nouvelle vidéo'
                ],
                'create' => [
                    'title' => 'Nouvelle vidéo',
                    'return' => 'Retourner à la liste de vidéos'
                ],
                'update' => [
                    'title' => "Modifier une vidéo"
                ]
            ],
            'playlists' => [
                'name' => 'Liste de lecture',
                'breadcrumbs' => 'Listes de lecture',
                'relation' => [
                    'label' => 'liste de lecture'
                ],
                'list_toolbar' => [
                    'new' => 'Nouvelle liste de lecture'
                ],
                'create' => [
                    'title' => 'Créer une liste de lecture',
                    'return' => 'Retourner aux listes de lectures'
                ],
                'update' => [
                    'title' => 'Modifier une liste de lecture'
                ]
            ]
        ],
        'models' => [
            'video' => [
                'columns' => [
                    'title' => 'Titre',
                    'yt_watch' => 'ID vidéo YouTube',
                    'published' => 'Publiée',
                    'Order' => 'Ordre'
                ],
                'fields' => [
                    'title' => 'Titre du vidéo',
                    'yt_watch' => 'ID vidéo YouTube',
                    'published' => 'Publiée',
                    'order' => 'Video display priority in playlists'
                ],
                'attributes' => [
                    'title' => 'titre',
                    'yt_watch' => 'ID vidéo YouTube'
                ]
            ],
            'playlist' => [
                'columns' => [
                    'name' => 'Nom',
                    'video_count' => 'Nombre de vidéos'
                ],
                'fields' => [
                    'name' => 'Nom',
                ],
                'attributes' => [
                    'name' => 'nom'
                ]
            ]
        ]
    ]
];