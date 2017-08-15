<?php

namespace Taema\Youtubegallery\Tests\Models;

use Illuminate\Foundation\Testing\TestCase;
use Taema\Youtubegallery\Models\Video;

class VideoTest extends TestCase
{
    /**
     * @test
     * @dataProvider youtubeUrlDataProvider
     */
    public function youtube_video_id_are_extracted_properly($url, $expected)
    {
        $video = Video::make([
            'yt_watch' => $url
        ]);

        $this->assertEquals($expected, $video->yt_watch);
    }

    public function youtubeUrlDataProvider()
    {
        return [
            ['http://www.youtube.com/watch?v=vpiMAaPTze8', 'vpiMAaPTze8'],
            ['http://youtu.be/l_la5XiQJdk', 'l_la5XiQJdk'],
            ['http://youtu.be/NLqAF9hrVbY', 'NLqAF9hrVbY'],
            ['https://youtu.be/qT47KF5pvfw', 'qT47KF5pvfw'],
            ['https://youtu.be/zImHyTyYhM8?t=4s', 'zImHyTyYhM8'],
            ['http://www.youtube.com/v/NLqAF9hrVbY?fs=1&hl=en_US', 'NLqAF9hrVbY'],
            ['http://www.youtube.com/v/NLqAF9hrVbY?fs=1&hl=en_US', 'NLqAF9hrVbY'],
            ['http://www.youtube.com/watch?v=NLqAF9hrVbY', 'NLqAF9hrVbY'],
            ['http://www.youtube.com/user/Scobleizer#p/u/1/1p3vcRhsYGo', '1p3vcRhsYGo'],
            ['http://www.youtube.com/ytscreeningroom?v=NRHVzbJVx8I', 'NRHVzbJVx8I'],
            ['http://www.youtube.com/sandalsResorts#p/c/54B8C800269D7C1B/2/PPS-8DMrAn4', 'PPS-8DMrAn4'],
            ['http://gdata.youtube.com/feeds/api/videos/NLqAF9hrVbY', 'NLqAF9hrVbY'],
            ['http://www.youtube.com/watch?v=spDj54kf-vY&feature=g-vrec', 'spDj54kf-vY'],
            ['http://www.youtube.com/watch?v=spDj54kf-vY&feature=youtu.be', 'spDj54kf-vY'],
            ['http://www.youtube-nocookie.com/watch?v=NLqAF9hrVbY', 'NLqAF9hrVbY'],
            ['http://www.youtube.com/embed/NLqAF9hrVbY', 'NLqAF9hrVbY'],
            ['https://www.youtube.com/embed/NLqAF9hrVbY', 'NLqAF9hrVbY'],
            ['https://www.youtube.com/watch?v=MRl7cxSOXdU&feature=youtu.be', 'MRl7cxSOXdU'],
            ['https://www.youtube.com/watch?v=q07SQFmL4rM', 'q07SQFmL4rM'],
            ['https://www.youtube.com/watch?v=q07SQFmL4yM', 'q07SQFmL4yM'],
            ['https://www.youtube.com/watch?time_continue=4&v=zImHyTyYhM8', 'zImHyTyYhM8'],
            ['http://www.youtube.com/embed/dQw4w9WgXcQ ...', 'dQw4w9WgXcQ'],
            ['http://www.youtube.com/watch?v=dQw4w9WgXcQ ...', 'dQw4w9WgXcQ'],
            ['http://www.youtube.com/?v=dQw4w9WgXcQ ...', 'dQw4w9WgXcQ'],
            ['http://www.youtube.com/v/dQw4w9WgXcQ ...', 'dQw4w9WgXcQ'],
            ['http://www.youtube.com/e/dQw4w9WgXcQ ...', 'dQw4w9WgXcQ'],
            ['http://www.youtube.com/user/username#p/u/11/dQw4w9WgXcQ ...', 'dQw4w9WgXcQ'],
            ['http://www.youtube.com/sandalsResorts#p/c/54B8C800269D7C1B/0/dQw4w9WgXcQ ...', 'dQw4w9WgXcQ'],
            ['http://www.youtube.com/watch?feature=player_embedded&v=dQw4w9WgXcQ ...', 'dQw4w9WgXcQ'],
            ['http://www.youtube.com/?feature=player_embedded&v=dQw4w9WgXcQ ...', 'dQw4w9WgXcQ'],
            ['https://www.youtube.com/watch?v=DFYRQ_zQ-gk&feature=featured', 'DFYRQ_zQ-gk'],
            ['https://www.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['http://www.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['//www.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['www.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['https://youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['http://youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['//youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['https://m.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['http://m.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['//m.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['m.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['https://www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US', 'DFYRQ_zQ-gk'],
            ['http://www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US', 'DFYRQ_zQ-gk'],
            ['//www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US', 'DFYRQ_zQ-gk'],
            ['www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US', 'DFYRQ_zQ-gk'],
            ['youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US', 'DFYRQ_zQ-gk'],
            ['https://www.youtube.com/embed/DFYRQ_zQ-gk?autoplay=1', 'DFYRQ_zQ-gk'],
            ['https://www.youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['http://www.youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['//www.youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['www.youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['https://youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['http://youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['//youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['https://youtu.be/DFYRQ_zQ-gk?t=120', 'DFYRQ_zQ-gk'],
            ['https://youtu.be/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['http://youtu.be/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['//youtu.be/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['youtu.be/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['https://www.youtube.com/watch?v=DFYRQ_zQ-gk&feature=featured', 'DFYRQ_zQ-gk'],
            ['https://www.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['http://www.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['//www.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['www.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['https://youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['http://youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['//youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['https://m.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['http://m.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['//m.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['m.youtube.com/watch?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['https://www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US', 'DFYRQ_zQ-gk'],
            ['http://www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US', 'DFYRQ_zQ-gk'],
            ['//www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US', 'DFYRQ_zQ-gk'],
            ['www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US', 'DFYRQ_zQ-gk'],
            ['youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US', 'DFYRQ_zQ-gk'],
            ['https://www.youtube.com/embed/DFYRQ_zQ-gk?autoplay=1', 'DFYRQ_zQ-gk'],
            ['https://www.youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['http://www.youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['//www.youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['www.youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['https://youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['http://youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['//youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['youtube.com/embed/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['https://youtu.be/DFYRQ_zQ-gk?t=120', 'DFYRQ_zQ-gk'],
            ['https://youtu.be/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['http://youtu.be/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['//youtu.be/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['youtu.be/DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
            ['https://www.youtube.com/HamdiKickProduction?v=DFYRQ_zQ-gk', 'DFYRQ_zQ-gk'],
        ];
    }

    /**
     * Creates the application.
     *
     * Needs to be implemented by subclasses.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernelInterface
     */
    public function createApplication()
    {
        // Do nothing
    }
}
