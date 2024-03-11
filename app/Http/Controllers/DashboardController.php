<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function login()
    {
        if (Auth::check() === true){
            return view('admin.dashboard');
        }

        return redirect()->route('login');
        
    }

    public function dashboard(){
        return view('admin.login');
    }

    public function do(Request $request){          
        
        dd(Auth::user()); 

        $credentials = [          
            'email' => $request->email,
            'password' => $request->password
        ];

        Auth::attempt($credentials);
    }
}

