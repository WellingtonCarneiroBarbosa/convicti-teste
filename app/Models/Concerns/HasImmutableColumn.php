<?php

namespace App\Models\Concerns;

use App\Exceptions\ImmutableModelFieldException;

trait HasImmutableColumn
{
    protected static function bootHasImmutableColumn()
    {
        static::updating(function ($model) {
            foreach ($model->immutableFields as $field) {
                if ($model->isDirty($field)) {
                    throw new ImmutableModelFieldException($field);
                }
            }
        });
    }
}
