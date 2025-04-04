<?php

namespace Lopatin96\LaraUuid\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid(): void
    {
        static::creating(static function (Model $model) {
            if (is_null($model->uuid)) {
                $model->uuid = Str::uuid();
            }
        });
    }
}