<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function showLogin(){
        return view('login');
    }

    public function showChoosePage(){
        return view('choose');
    }

    public function showSignUP(){
        return view('sign-up');
    }

    public function showVerifyPage(){
        return view('otp');
    }

    public function verifyCode(){
        return redirect('main');
    }

    public function handleLogin(){
        return redirect('main');
    }

    public function showMainPage(){
        return view('main');
    }
}
