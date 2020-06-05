<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\Auth\UserNotFound;
use Kreait\Firebase\Exception\Auth\InvalidPassword;
use Kreait\Firebase\Exception\InvalidArgumentException;

class userLoginController extends Controller
{    
    public function login(Request $request){        
        $email = $request->input('email');
        $password = $request->input('password');
        try{
            $firebase = app('firebase');
            $firebase->getAuth()->getUserByEmail($email);
            $firebase->getAuth()->verifyPassword($email,$password);
            $user = $firebase->getAuth()->getUserByEmail($email);
            if($user!= null){
                /**$uid=$user->uid;
                $firebase->getAuth()->disableUser($uid);**/
                return redirect("/dashboard");
            }
            
        }catch(UserNotFound $e){
            $EmailError = "Email no existente en la plataforma";
            return redirect("/login")->with("toast_warning", $EmailError);
        }catch(InvalidPassword $e){
            $PasswordError = "Contraseña invalida";
            return redirect("/login")->with("toast_warning", $PasswordError);
        }catch(InvalidArgumentException $e){
            $PasswordError = "Contraseña invalida";
            return redirect("/login")->with("toast_warning", $PasswordError);
        }
    }
}
