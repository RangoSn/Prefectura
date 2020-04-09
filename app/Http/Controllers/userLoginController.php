<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;


class userLoginController extends Controller
{
    //
    protected $firebase;
    protected $auth;

    public function index()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'./firebasekey.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://prefectura-ilb.firebaseio.com/')
        ->create();
    }
    
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'./firebasekey.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://prefectura-ilb.firebaseio.com/')
        ->create();
        $auth = $firebase->getAuth()->singInWithEmailAndPassword($email,$password);
    }


}
