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
          $SA = '{
            "type": "service_account",
            "project_id": "prefectura-ilb",
            "private_key_id": "22a08c7cfdeb3b11e30f87142eed4bd5e8ddc38e",
            "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDBIBW3Xbv3gTTX\nN74/9DOD+skB/kdS5L3SuDZigWCiH1t1Ev33mztCBePAXL6OWfI/RIu+pCy35Hpr\nWb8Hj4w0QUgxA+U9mg1Ai5/fZrXk0TDZeMc8Ogv1mN4BzNtS6x7WwRE1o/jyqjkD\nQo0kpdW6I+VZjxxqRVN2o2WSOSwSK5i9EjZE79luMm3XRYKZDf/NCSqiasdiiugE\nT6Yo6qakp2i6HqYuB/+GY/y01Y4rlKTbsdcAFFmK+2poXGcHgrD6FLTnhGNGlxgF\njlnANga5/kko8zZGWvVNDeOG7q3g1bdEvNkRZ9NDex7Xs0K0WhrSH9UdlXB8DD8o\nIljZYJpHAgMBAAECggEAYChQh781EvQTUkFgCcnWSJV6tfJcoupflWbBNWTDr5U7\nXVx6dWmmJKZ4EtRa0Nf6JQRFLEPkPB+X0JGb6vDPV0lV34nX/0cP6B5dGMe0M1zx\nHKblVJh2Ue+uQmk0nuGQtk7k+bdOAc09m+DsE946P3cV//Sgqk0gVIbg0OCEj/ql\nluTyR4Xguuq8vdscjeOD3DcSY8xSBA9wVA1qPT5Wl0VYc/FONRo0vsSpHROGwEm3\nfcvATPJLcwqzYjKVJf0mS5+k256P8QbyAY4NpFkZkrWKSui++1HkvbaRLADuCwtZ\nU7Lk6K43v20R/n0rJSaWCJvNiVBmzQrr8iC/3FMHkQKBgQDjCP5hxJlSUSlPHRkZ\ntXYjkmGQlSlYzuWJNIoumEXxuoPnps6NcUnSoDYUqONIk1cI4C+Rkg1iDA+OD4nk\nN6lOalyRFIOSCsjGorW3J/Kx/fDfjkXMW0NNhI1M1kSp2wqgWlmkdOXtrwCOcBU4\njWz1YXYFvL9Q2pK8pMAzmoQJjwKBgQDZw5dc720cx6LH4Ac4Q4xsfZljoURuKG+2\nmsE8dA7093noGwLRuexUmrpWlsmYZz47Fsb4xJRqGOhfw670D+tdPHkpdIDVIMui\ncptipQN+kTVUUwCfMfvH05XVqOuGCwHi0ok8GV9JrlSY7Z8kEAUqx/2axkzYeGwg\nNhIBfnLXyQKBgE2hQKIbgDWGbPKRR4jj5F5rahLu/fFQ5WmR3oHqLVhnZzzpa40v\npIdxoqxTx0uEnej6BynmX88bwqHXrFWttqWKdtZgxlBEgbxx3GKhNTopU5iNZE5p\nEk1KOqqARYAy1qJX4nj6Q7iO80jBCHCK4yvQRHPXwy8ZXb1FNDcw6V7/AoGAffS/\nETc/onzqb7fqFSYlC/+eAF2gKiNjcniSurfaiuC194XgHJTw2ILiswDmvCtDeIQV\nNIDn43Jivjl+cZbfqX84Cb1kY2JjxqOJswYFPmkZMpwL6QjNPGjq6rmY+WBWh+8F\nB+kZD5IxRn9zJDXL91HUI3j9q9wDlqIPyiNso9kCgYEA3pFjaA5wrqCleQtc0Mdz\nthIrVL0ssneRFf6wuQH8iUolo/ttLy9+nXQOtJi/eIwTTul8UcdkhDMGPH5n2bnU\n5PMF+Y4f9lDg+l0Ru6F3qANWy5bckHxddNKgIbDAxLMYTzzbzTeCtnOlYUV7P7vY\nmopz98xFusKHJasg5robnhw=\n-----END PRIVATE KEY-----\n",
            "client_email": "firebase-adminsdk-gs1fh@prefectura-ilb.iam.gserviceaccount.com",
            "client_id": "107291191619951228679",
            "auth_uri": "https://accounts.google.com/o/oauth2/auth",
            "token_uri": "https://oauth2.googleapis.com/token",
            "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
            "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-gs1fh%40prefectura-ilb.iam.gserviceaccount.com"
        }
        '; 
          $serviceAccount = ServiceAccount::fromJson($SA);
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
