<?php namespace Mathieutanguay\Youtubegallery;

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
            'author'      => 'mathieutanguay',
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
            'Mathieutanguay\Youtubegallery\Components\VideoList' => 'VideoList',
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
            'mathieutanguay.youtubegallery.some_permission' => [
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
                'label'       => 'YT Gallery',
                'url'         => Backend::url('mathieutanguay/youtubegallery/videos'),
                'icon'        => 'icon-youtube-play',
                'permissions' => ['mathieutanguay.youtubegallery.*'],
                'order'       => 500,
            ],
        ];
    }
}
