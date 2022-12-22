<?php

namespace App\Exceptions\InternalExceptions;

class LogicException extends BaseException
{
    public const INTERNAL_MESSAGE = 'Logic error';

    public const INTERNAL_DESCRIPTION = 'An error occurred in the logic of the application';

    public const HINT = 'Please contact the support team';

    public const HTTP_CODE = 500;

    public const INTERNAL_CODE = 1000;
}
