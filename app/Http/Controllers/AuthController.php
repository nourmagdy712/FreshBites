<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function store(Request $request){
         
        if(!Auth::guard('admin')->attempt($request->only('email','password'))){
            return redirect()->back()->with('error','Invalid Credentials');
           };
           return redirect()->intended(route('admin.dashboard'));
        }
        public function destroy(){
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login');
        }
}