<?php

namespace Tests\Unit\Orders;

use App\Exceptions\ImmutableModelFieldException;
use App\Models\Order;
use Tests\TestCase;

class UpdateOrderTest extends TestCase
{
    /** @test */
    public function assert_exception_is_thrown_when_trying_to_update_an_immutable_field()
    {
        $this->expectException(ImmutableModelFieldException::class);

        $order = Order::firstOrFail();

        $order->seller_id = 10;
        $order->save();
    }

    /** @test */
    public function assert_the_column_can_not_be_not_updated()
    {
        $order = Order::firstOrFail();

        $originalOrder = $order->replicate();

        $order->uuid      = $order::generateUuid();
        $order->seller_id = 10;
        $order->unity_id  = 2;
        $order->amount    = 100;

        try {
            $order->save();
        } catch (ImmutableModelFieldException $e) {
            //
        }

        $databaseOrder = Order::findOrFail($order->id);

        $this->assertEquals(
            $originalOrder->seller_id,
            $databaseOrder->seller_id
        );

        $this->assertEquals(
            $originalOrder->unity_id,
            $databaseOrder->unity_id
        );

        $this->assertEquals(
            $originalOrder->amount->toDecimal()->getAmount(),
            $databaseOrder->amount->toDecimal()->getAmount()
        );
    }
}
