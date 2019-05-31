<?php

namespace Jasonej\EloquentUuid\Tests\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Jasonej\EloquentUuid\UsesUuid;

/**
 * Class User
 * @package Jasonej\EloquentUuid\Tests\Models
 * @property Carbon created_at
 * @property string first_name
 * @property string id
 * @property string last_name
 * @property Carbon updated_at
 */
class User extends Model
{
    use UsesUuid;

    /** @inheritDoc */
    public $incrementing = false;

    /** @inheritDoc */
    protected $guarded = [];

    /** @var bool */
    protected $orderedPrimaryKey = true;
}