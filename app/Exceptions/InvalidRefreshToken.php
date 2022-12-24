<?php

namespace App\Exceptions;

use App\Actions\Web\Auth\Logout;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InvalidRefreshToken extends Exception
{
    public function render(Request $request)
    {
        if (! $request->expectsJson()) {
            (new Logout($request))->execute();

            Session::flash('session_expired', 'Sua sessão expirou. Por segurança, faça login novamente.');

            return redirect()->route('login');
        }

        throw $this;
    }
}
