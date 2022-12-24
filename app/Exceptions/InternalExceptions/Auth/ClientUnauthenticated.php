<?php

namespace App\Exceptions\InternalExceptions\Auth;

use App\Exceptions\InternalExceptions\BaseException;

class ClientUnauthenticated extends BaseException
{
    public const INTERNAL_MESSAGE = 'Client unauthenticated';

    public const INTERNAL_DESCRIPTION = 'Invalid client credentials';

    public const HINT = 'Please check your client credentials';

    public const HTTP_CODE = 401;

    public const INTERNAL_CODE = 1050;
}
