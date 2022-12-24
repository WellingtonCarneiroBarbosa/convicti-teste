<?php

namespace App\Providers;

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

        Request::macro('getToken', function () {
            $tokenId     = \Lcobucci\JWT\Configuration::forUnsecuredSigner()
            ->parser()
            ->parse($this->bearerToken())
            ->claims()
            ->get('jti');

            return \Laravel\Passport\Token::query()->findOrFail($tokenId);
        });
    }
}
