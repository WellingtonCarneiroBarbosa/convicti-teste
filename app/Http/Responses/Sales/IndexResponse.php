<?php

namespace App\Http\Responses\Sales;

use App\Http\Resources\Orders\OrdersCollection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class IndexResponse implements Responsable
{
    public function __construct(private OrdersCollection $orders)
    {
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return void|JsonResponse
     */
    public function toResponse($request)
    {
        if ($request->isApi()) {
            return $this->apiResponse();
        }

        return $this->webResponse();
    }

    private function apiResponse(): JsonResponse
    {
        return apiResponse()->ok($this->orders);
    }

    private function webResponse(): void
    {
    }
}
