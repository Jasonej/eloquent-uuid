<?php

namespace Jasonej\EloquentUuid\Tests\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Jasonej\EloquentUuid\UsesUuid;

/**
 * Class Article
 * @package Jasonej\EloquentUuid\Tests\Models
 * @property Carbon created_at
 * @property integer id
 * @property string title
 * @property Carbon updated_at
 */
class Article extends Model
{
    use UsesUuid;

    /** @inheritDoc */
    public $incrementing = false;

    /** @inheritDoc */
    protected $guarded = [];
}