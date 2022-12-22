<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'amount' => random_int(5, 3099),
            'status' => Order::STATUSES[array_rand(Order::STATUSES, 1)],
        ];
    }

    public function seller(User $user)
    {
        return $this->state(function (array $attributes) use ($user) {
            return [
                'seller_id' => $user->id,
            ];
        });
    }
}
