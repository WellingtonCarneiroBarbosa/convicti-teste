<?php

namespace App\Exceptions;

use App\Actions\Web\Auth\RefreshToken;
use Exception;
use Illuminate\Support\Facades\Session;

class AuthTokenExpired extends Exception
{
    public function render()
    {
        (new RefreshToken())->execute();

        Session::flash('error', 'Ops. Tivemos um problema com sua sessão. Por favor, tente novamente.');

        return redirect()->back();
    }
}
