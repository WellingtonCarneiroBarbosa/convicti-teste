<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local')) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard();

        /**
         * Get the token model from request.
         *
         * @return \Laravel\Passport\Token
         */
        Request::macro('getToken', function () {
            $tokenId     = \Lcobucci\JWT\Configuration::forUnsecuredSigner()
            ->parser()
            ->parse($this->bearerToken())
            ->claims()
            ->get('jti');

            return \Laravel\Passport\Token::query()->findOrFail($tokenId);
        });

        /**
         * Convert nested requests from ReactJS to array.
         *
         * TODO: Remove hard nested level.
         *
         * @param array $data
         * @return array
         */
        Request::macro('nested', function (array $data) {
            return dot($data, parse: true);
        });

        /**
         * Check if request wants a API response.
         *
         * @return bool
         */
        Request::macro('isApi', function (): bool {
            return $this->is('api/*') && $this->expectsJson();
        });

        /**
         * Get the authenticated user for the request.
         *
         * @param string|null $guard
         * @return \App\Models\User
         */
        Request::macro('currentUser', function ($guard = null): User {
            $user = call_user_func($this->getUserResolver(), $guard);

            if ($user instanceof User) {
                return $user;
            }

            throw new \Exception('There is any user authenticated.');
        });
    }
}
