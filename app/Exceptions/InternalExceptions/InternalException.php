<?php

namespace App\Exceptions\InternalExceptions;

interface InternalException extends \Throwable
{
    public function getInternalCode(): int;

    public function getInternalMessage(): string;

    public function getInternalDescription(): string;

    public function getHint(): string;

    public function getHttpCode(): int;
}
