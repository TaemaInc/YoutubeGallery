<?php

namespace taema\youtubegallery\tests\controllers;

use PluginTestCase;
use Taema\Youtubegallery\Controllers\Videos;

/**
 * Class VideosTest
 *
 * @package taema\youtubegallery\tests\controllers
 *
 * @author Mathieu Tanguay <mathieu.tanguay@taema.ca>
 * @copyright Taema Inc.
 */
class VideosTest extends PluginTestCase
{
    /**
     * @test
     */
    public function can_instantiate_videos_controller()
    {
        new Videos();
    }
}
