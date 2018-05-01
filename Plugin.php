<?php

namespace Taema\Youtubegallery;

use Backend;
use System\Classes\PluginBase;

/**
 * youtubegallery Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'YouTube Video Gallery',
            'description' => 'Make galleries out of YouTube videos instead of pictures',
            'author'      => 'Taema Inc.',
            'icon'        => 'icon-youtube-play'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Taema\Youtubegallery\Components\SinglePlaylist' => 'Playlist',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        $tab = 'YouTube Video Gallery';

        return [
            'taema.youtubegallery.tab' => [
                'label' => 'Show the YouTube Video Gallery tab in the backend',
                'tab' => $tab
            ],
            'taema.youtubegallery.access_videos' => [
                'label' => 'Access to the video section',
                'tab' => $tab
            ],
            'taema.youtubegallery.access_playlists' => [
                'label' => 'Access to the playlist section',
                'tab' => $tab
            ]
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'youtubegallery' => [
                'label'       => 'taema.youtubegallery::lang.plugin.navigation.label',
                'url'         => Backend::url('taema/youtubegallery/videos'),
                'icon'        => 'icon-youtube-play',
                'permissions' => ['taema.youtubegallery.tab'],
                'order'       => 500,
                'sideMenu' => [
                    'videos' => [
                        'label' => 'taema.youtubegallery::lang.plugin.navigation.sidemenu.videos.label',
                        'icon' => 'icon-video-camera',
                        'url' => Backend::url('taema/youtubegallery/videos'),
                        'permissions' => ['taema.youtubegallery.access_videos']
                    ],
                    'playlists' => [
                        'label' => 'taema.youtubegallery::lang.plugin.navigation.sidemenu.playlists.label',
                        'icon' => 'icon-list',
                        'url' => Backend::url('taema/youtubegallery/playlists'),
                        'permissions' => ['taema.youtubegallery.access_playlists']
                    ]
                ]
            ],
        ];
    }
}
