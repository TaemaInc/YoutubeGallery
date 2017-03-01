<?php namespace Mathieutanguay\Youtubegallery\Models;

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
    public $table = 'mathieutanguay_youtubegallery_videos';

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
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
