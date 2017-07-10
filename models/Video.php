<?php

namespace Taema\Youtubegallery\Models;

use Model;
use October\Rain\Database\Traits\Sortable;

/**
 * video Model
 */
class Video extends Model
{
    use Sortable;

    const SORT_ORDER = 'order';

    /**
     * @var string The database table used by the model.
     */
    public $table = 'taema_youtubegallery_videos';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['name', 'yt_watch', 'published'];

    /**
     * Tries to extract YouTube video id if a full YouTube url was given
     *
     * @param $value
     */
    public function setYtWatchAttribute($value)
    {
        preg_match(
            '/(?:https?:)?(?:\/\/)?(?:[0-9A-Z-]+\.)?(?:youtu\.be\/|youtube(?:-nocookie)?\.com\S*?[^\w\s-])([\w-]{11})(?=[^\w-]|$)(?![?=&+%\w.-]*(?:[\'"][^<>]*>|<\/a>))[?=&+%\w.-]*/',
            $value,
            $matches
        );

        $this->attributes['yt_watch'] = (isset($matches[1])) ? $matches[1] : $value;
    }

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
