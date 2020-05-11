<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;



class FirebaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Firebase::class, function () {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'./firebasekey.json');
          return (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://prefectura-ilb.firebaseio.com/')
        ->create();
      });

        $this->app->alias(Firebase::class, 'firebase');
    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
