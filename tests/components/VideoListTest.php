<?php

namespace taema\youtubegallery\tests\components;

use Taema\Youtubegallery\Components\VideoList;
use PluginTestCase;
use Taema\Youtubegallery\Models\Video;

/**
 * Class VideoListTest
 *
 * @package taema\youtubegallery\tests\components
 *
 * @author Taema Inc. <mathieu.tanguay@taema.ca>
 * @copyright Taema Inc.
 */
class VideoListTest extends PluginTestCase
{
    /**
     * @test
     */
    public function can_create_and_run_video_list()
    {
        $videoList = new VideoList();

        // Void return. We just expect no exception
        $videoList->onRun();
    }

    /**
     * @test
     */
    public function can_create_and_run_video_list_having_videos()
    {
        Video::create([
            'name' => 'Final Fantasy VI',
            'yt_watch' => 'sAyb0Arwy8g',
            'published' => true
        ]);

        $videoList = new VideoList();

        // Void return. We just expect no exception
        $videoList->onRun();
    }
}
