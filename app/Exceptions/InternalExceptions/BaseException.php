<?php

namespace App\Exceptions\InternalExceptions;

use Exception;
use Throwable;

class BaseException extends Exception implements InternalException
{
    public function __construct(
        protected ?string $description = null,
        protected ?string $hint = null,
        protected ?int $httpCode = null,
        protected ?Throwable $previous = null,
    ) {
        parent::__construct($this->getInternalDescription(), $this->getInternalCode(), $previous);
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
        return $this->message ?? $this::INTERNAL_MESSAGE;
    }

    public function getInternalDescription(): string
    {
        return $this->description ?? $this::INTERNAL_DESCRIPTION;
    }

    public function getHttpCode(): int
    {
        return $this->httpCode ?? $this::HTTP_CODE;
    }
}
