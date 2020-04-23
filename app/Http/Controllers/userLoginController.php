<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;


class userLoginController extends Controller
{    
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        try{
            $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'./firebasekey.json');
            $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://prefectura-ilb.firebaseio.com/')
            ->create();
            $mappedUser = $firebase->getAuth()->verifyPassword($email,$password);
        }catch(Kreait\Firebase\Exception\Auth\InvalidPassword $e){
            print_r("kk");        
        }
        //firebase
        
        
        print_r($mappedUser);        
    }

}
