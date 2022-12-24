<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as'        => 'passport.',
    'prefix'    => config('passport.path', 'oauth'),
    'namespace' => 'Laravel\Passport\Http\Controllers',
], function () {
    Route::post('/token', [
        'uses'       => 'AccessTokenController@issueToken',
        'as'         => 'token',
        'middleware' => 'throttle',
    ]);

    Route::get('/authorize', [
        'uses'       => 'AuthorizationController@authorize',
        'as'         => 'authorizations.authorize',
        'middleware' => 'web',
    ]);

    $guard = config('passport.guard', null);

    Route::middleware(['web', $guard ? 'auth:' . $guard : 'auth'])->group(function () {
        Route::post('/token/refresh', [
            'uses' => 'TransientTokenController@refresh',
            'as'   => 'token.refresh',
        ]);

        Route::post('/authorize', [
            'uses' => 'ApproveAuthorizationController@approve',
            'as'   => 'authorizations.approve',
        ]);

        Route::delete('/authorize', [
            'uses' => 'DenyAuthorizationController@deny',
            'as'   => 'authorizations.deny',
        ]);

        Route::post('/personal-access-tokens', [
            'uses' => 'PersonalAccessTokenController@store',
            'as'   => 'personal.tokens.store',
        ]);
    });
});
