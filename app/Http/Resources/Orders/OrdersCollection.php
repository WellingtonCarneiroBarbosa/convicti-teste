<?php

namespace App\Http\Resources\Orders;

use App\Enums\Role;
use App\Models\Unity;
use App\Models\User;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @mixin \App\Models\Order
 */
class OrdersCollection extends ResourceCollection
{
    public function __construct(
        mixed $resource,
        private ?Unity $unity = null,
        private ?User $seller = null,
        private ?Role $role = null,
    ) {
        parent::__construct($resource);
    }

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'                 => $this->uuid,
            'seller'             => $this->seller,
            'unity'              => $this->unity,
            'amount'             => $this->amount,
            'status'             => $this->status,
            'status_description' => $this->status_description,
            'created_at'         => $this->created_at,
            'updated_at'         => $this->updated_at,
        ];
    }
}
