<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class Giris extends Controller
{
    public function login()
    {
        return view('back.giris');
    }

    public function loginPost(Request $request) {
        //dd($request->post());
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            $admins=Auth::user()->name;
            toastr()->success('Hoşgeldiniz '.Auth::user()->name);
            return redirect()->route('admin.dashboard', compact('admins'));
        }
        return redirect()->route('admin.login')->withErrors('Email adresi veya şifre hatalı');
        
    }

    public function logOut(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
