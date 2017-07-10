<?php namespace Taema\Youtubegallery\Components;

use Cms\Classes\ComponentBase;
use Taema\Youtubegallery\Models\Playlist;
use Taema\Youtubegallery\Models\Video;

class SinglePlaylist extends ComponentBase
{
    /** @var Video[] */
    public $videos = [];

    /** @var string */
    public $name;

    public function componentDetails()
    {
        return [
            'name'        => 'Playlist Component',
            'description' => 'Displays a list of videos from a playlist'
        ];
    }

    public function defineProperties()
    {
        return [
            'playlist' => [
                'title' => 'Playlist',
                'description' => 'Playlist to display videos from',
                'type' => 'dropdown',
                'required' => true
            ],
            'display_title' => [
                'title' => 'Display title',
                'description' => 'Add the provided display title on top of the video',
                'type' => 'checkbox',
                'default' => false
            ]
        ];
    }

    public function getPlaylistOptions()
    {
        $options = [];
        foreach (Playlist::all() as $playlist) {
            $options[$playlist->id] = $playlist->name;
        }

        return $options;
    }

    public function onRun()
    {
        $playlist = Playlist::find($this->property('playlist'));
        $this->name = $playlist->name;
        $this->videos = $playlist->videos()->where('published', true)->get();
    }
}
