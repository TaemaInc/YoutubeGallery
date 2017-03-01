<?php namespace Mathieutanguay\Youtubegallery\Components;

use Cms\Classes\ComponentBase;
use Mathieutanguay\Youtubegallery\Models\Video;

class VideoList extends ComponentBase
{
    public $videos = [];

    public function componentDetails()
    {
        return [
            'name'        => 'VideoList Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->videos = Video::where('published', true)->orderBy('order')->get();
    }
}
