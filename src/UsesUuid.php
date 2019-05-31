<?php

namespace Jasonej\EloquentUuid;

use Illuminate\Support\Str;

trait UsesUuid
{
    /**
     * Boot this trait.
     *
     * @return void
     */
    public static function bootUsesUuid(): void
    {
        static::creating(function (self $self) {
            $value = $self->orderedPrimaryKey ?? false ?
                    Str::orderedUuid() :
                    Str::uuid();

            $self->setAttribute($self->getKeyName(), $value);
        });
    }
}