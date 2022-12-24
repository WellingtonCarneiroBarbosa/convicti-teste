<?php

namespace App\Helpers;

use App\Exceptions\InternalExceptions\InternalException;
use FoundationResponse;
use Illuminate\Http\JsonResponse;
use InvalidArgumentException;

class ApiResponser
{
    /**
     * @see \Illuminate\Contracts\Routing\ResponseFactory
     *
     * @param mixed $data
     * @param string|null $message
     * @param integer $httpCode
     * @param array $headers
     * @param integer $options
     * @return JsonResponse
     */
    public function ok(
        mixed $data,
        ?string $message = null,
        int $httpCode = FoundationResponse::HTTP_OK,
        array $headers = [],
        int $options = 0
    ): JsonResponse {
        $response = [
            'data'      => $data,
            'message'   => $message,
            'http_code' => $httpCode,
        ];

        if (is_null($data) && is_null($message)) {
            unset($response['data']);
            unset($response['http_code']);


            $httpCode = FoundationResponse::HTTP_NO_CONTENT;
        }

        if (is_null($message)) {
            unset($response['message']);
        }

        return response()->json(
            data: $response,
            status: $httpCode,
            headers: $headers,
            options: $options,
        );
    }

    /**
     * @see \Illuminate\Contracts\Routing\ResponseFactory
     *
     * @param mixed $exception
     * @param array $headers
     * @param integer $options
     * @return JsonResponse
     */
    public function error(
        mixed $exception,
        array $headers = [],
        int $options = 0
    ): JsonResponse {
        if (! $exception instanceof InternalException) {
            throw new InvalidArgumentException('The exception must be an instance of App\\Exceptions\\InternalExceptions\\InternalException.');
        }

        return response()->json(
            data: [
                'message'       => $exception->getInternalMessage(),
                'description'   => $exception->getInternalDescription(),
                'hint'          => $exception->getHint(),
                'code'          => $exception->getInternalCode(),
            ],
            status: $exception->getHttpCode(),
            headers: $headers,
            options: $options,
        );
    }
}
