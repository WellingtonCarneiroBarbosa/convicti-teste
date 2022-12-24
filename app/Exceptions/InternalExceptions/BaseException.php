<?php

namespace App\Exceptions\InternalExceptions;

use Exception;
use Illuminate\Http\Request;
use Throwable;

class BaseException extends Exception implements InternalException
{
    public function __construct(
        protected ?string $description = null,
        protected ?string $hint = null,
        protected ?int $httpCode = null,
        protected ?Throwable $previous = null,
    ) {
        parent::__construct($this->getMessage(), $this->getInternalCode(), $previous);
    }

    public function getHint(): string
    {
        return $this->hint ?? $this::HINT;
    }

    public function getInternalCode(): int
    {
        return $this::INTERNAL_CODE;
    }

    public function getInternalMessage(): string
    {
        return ! isset($this->message) || $this->message === "" ? $this::INTERNAL_MESSAGE : $this->message;
    }

    public function getInternalDescription(): string
    {
        return $this->description ?? $this::INTERNAL_DESCRIPTION;
    }

    public function getHttpCode(): int
    {
        return $this->httpCode ?? $this::HTTP_CODE;
    }

    public function render(Request $request)
    {
        return apiResponse()->error($this);
    }
}
