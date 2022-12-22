<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class ImmutableModelFieldException extends Exception
{
    public function __construct(string $fieldName, ?Throwable $previous = null)
    {
        parent::__construct("The field {$fieldName} is immutable", 0, $previous);
    }
}
