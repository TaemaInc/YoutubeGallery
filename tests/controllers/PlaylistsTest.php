<?php

namespace taema\youtubegallery\tests\controllers;

use PluginTestCase;
use Taema\Youtubegallery\Controllers\Playlists;

/**
 * Class PlaylistsTest
 *
 * @package taema\youtubegallery\tests\controllers
 *
 * @author Mathieu Tanguay <mathieu.tanguay@taema.ca>
 * @copyright Taema Inc.
 */
class PlaylistsTest extends PluginTestCase
{
    /**
     * @test
     */
    public function can_instantiate_playlists_controller()
    {
        new Playlists();
    }
}
