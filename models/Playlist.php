<?php namespace Taema\Youtubegallery\Models;

use Model;

/**
 * Playlist Model
 */
class Playlist extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'taema_youtubegallery_playlists';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'videos' => [
            Video::class,
            'table' => 'taema_youtubegallery_playlist_video'
        ],
        'videos_count' => [
            Video::class,
            'table' => 'taema_youtubegallery_playlist_video',
            'count' => true
        ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
