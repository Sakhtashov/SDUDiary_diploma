<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;


class IndexController extends Controller
{
   public function indexShowPage(){
        return view('index');
   }
       public function login(Request $request)
       {
            $credentials = $request->only('email', 'password');

            if(!Auth::validate($credentials)):
                return redirect('/')->withErrors(trans('auth.failed'));
                endif;

                $user = Auth::getProvider()->retrieveByCredentials($credentials);

               Auth::login($user);

            return $this->authenticated($request, $user);
       }


       public function logout(Request $request)
       {
           Auth::logout();

           $request->session()->invalidate();

           $request->session()->regenerateToken();

           return redirect('/');
       }


       public function showRegistrationForm()
       {
           return view('auth.register');
       }


       public function register(Request $request)
       {
          $user = User::create($request->validate([
                                       'email' => 'required|string|email|max:255|unique:users',
                                       'password' => 'required|string|min:8|confirmed',
                                   ]));

          auth()->login($user);

          return redirect('/')->with('success', "Account successfully registered.");
       }

}
