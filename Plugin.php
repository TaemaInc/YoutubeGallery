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
            'icon'        => 'fa-youtube-play'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

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
        return []; // Remove this line to activate

        return [
            'taema.youtubegallery.some_permission' => [
                'tab' => 'youtubegallery',
                'label' => 'Some permission'
            ],
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
                'permissions' => ['taema.youtubegallery.*'],
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
