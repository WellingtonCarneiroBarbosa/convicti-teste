<?php

namespace App\Models;

use App\Helpers\MonetaryValue;
use App\Models\Concerns\HasMonetaryColumn;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Order
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $unity_id
 * @property int $seller_id
 * @property MonetaryValue $amount
 * @property string $status
 * @property string|null $status_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\OrderFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatusDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUnityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @property-read \App\Models\User|null $seller
 * @property-read \App\Models\Unity|null $unity
 */
class Order extends Model
{
    use HasFactory;
    use HasMonetaryColumn;

    public const STATUSES = [
        'estorno'          => self::STATUS_REVERSAL,
        'cancelled'        => self::STATUS_CANCELED,
        'charge_back'      => self::STATUS_CHARGE_BACK,
        'refused'          => self::STATUS_REFUSED,
        'waiting_payment'  => self::STATUS_WAITING_PAYMENT,
        'authorized'       => self::STATUS_AUTHORIZED,
        'paid'             => self::STATUS_PAID,
    ];

    public const STATUS_REVERSAL         = 'reversal';
    public const STATUS_CANCELED         = 'canceled';
    public const STATUS_CHARGE_BACK      = 'charge_back';
    public const STATUS_REFUSED          = 'refused';
    public const STATUS_WAITING_PAYMENT  = 'waiting_payment';
    public const STATUS_AUTHORIZED       = 'authorized';
    public const STATUS_PAID             = 'paid';

    public function amount(): Attribute
    {
        return $this->asMonetaryColumn();
    }

    public function unity(): BelongsTo
    {
        return $this->belongsTo(Unity::class);
    }

    public function seller(): BelongsTo
    {
        return $this->belongsTo(User::class, 'seller_id', 'id');
    }
}
