<?php

namespace App\Models\User;

use App\Enums\Role as EnumsRole;
use Spatie\Permission\Models\Role as SpatieRoleModel;

/**
 * App\Models\User\Role
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Role extends SpatieRoleModel
{
    public const MAIN_DIRECTOR_ROLE = EnumsRole::MAIN_DIRECTOR_ROLE;

    public const SUB_DIRECTOR_ROLE = EnumsRole::SUB_DIRECTOR_ROLE;

    public const MANAGER_ROLE = EnumsRole::MANAGER_ROLE;

    public const SELLER_ROLE = EnumsRole::SELLER_ROLE;

    public const ROLES = [
        self::MAIN_DIRECTOR_ROLE,
        self::SUB_DIRECTOR_ROLE,
        self::MANAGER_ROLE,
        self::SELLER_ROLE,
    ];
}
