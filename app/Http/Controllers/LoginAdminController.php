<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class LoginAdminController extends Controller
{
   public function loginAdmin()
   {
    return view('layouts.backend-dashboard.Adminlogin.loginAdmin');
   }

   public function loginAction (Request $request)
   {
        if(Auth::attempt($request -> only('email','password')))
        {
            return redirect('/');
        }

        return redirect('/loginAdmin');
   }


   public function registerAdmin()
   {
    return view('layouts.backend-dashboard.Adminlogin.registerAdmin');
   }

   public function registerAction(Request $request)
   {
    User::create
    ([
        'name' => $request ->name,
        'email' => $request ->email,
        'password' => bcrypt($request->password),
        'remember_token' => Str::random(60),
    ]);
    return redirect('loginAdmin');
   }

   public function logout()
   {
    Auth::logout();
    return \redirect('loginAdmin');
   }
}
