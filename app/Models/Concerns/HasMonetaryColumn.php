<?php

namespace App\Models\Concerns;

use App\Helpers\MonetaryValue;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasMonetaryColumn
{
    private function asMonetaryColumn(bool $isNullable = false): Attribute
    {
        if (! $isNullable) {
            return Attribute::make(
                set: function (int|float $value) {
                    return (new MonetaryValue($value))->toCents()->getAmount();
                },
                get: function (int $value) {
                    return new MonetaryValue($value);
                },
            );
        }

        return Attribute::make(
            set: function (int|float|null $value) {
                if ($value === null) {
                    return null;
                }

                return (new MonetaryValue($value))->toCents()->getAmount();
            },
            get: function (?int $value) {
                if ($value === null) {
                    return null;
                }

                return new MonetaryValue($value);
            },
        );
    }
}
