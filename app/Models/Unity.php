<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;

/**
 * App\Models\Unity
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Unity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unity query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $latitude
 * @property string $longitude
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Unity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unity whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unity whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unity whereUpdatedAt($value)
 * @property string $region
 * @method static \Illuminate\Database\Eloquent\Builder|Unity whereRegion($value)
 */
class Unity extends Model
{
    use HasFactory;

    public static function findByName(string $name, bool $throws = false): null|self
    {
        $name = Str::lower($name);

        $unity = self::query()->where('name', $name)->first();

        if (is_null($unity)) {
            if (! $throws) {
                return null;
            }

            throw new ModelNotFoundException("Unity with name {$name} not found");
        }

        return $unity;
    }

    public function name(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => Str::lower($value),
        );
    }
}
