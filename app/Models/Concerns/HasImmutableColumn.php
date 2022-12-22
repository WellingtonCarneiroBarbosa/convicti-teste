<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Model;

trait HasImmutableColumn
{
    protected static function bootHasImmutableColumn(): void
    {
        static::updating(function (Model $model) {
            foreach ($model->immutableFields as $field) {
                if ($model->isDirty($field)) {
                    $model->setAttribute($field, $model->getOriginal($field));
                }
            }
        });
    }
}
