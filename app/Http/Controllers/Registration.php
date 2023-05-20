<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registration extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $request){

        echo "<pre>";
    
        $request->validate([
            'name' => 'required',
            'email' =>'required|email',
            'password' =>'required',
            'confirm_password' =>'required|same:password',	
        ]);
        print_r($request->all());
    }
}
