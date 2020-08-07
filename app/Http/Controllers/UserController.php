<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class UserController extends Controller{
    
    public function ingresar(Request $request){
        $input = $request->except(['_token']);
        Validator::make($input, [
            'email'=> 'required','password'=> 'required',
        ],[
            'email.required' =>"el campo es requerido",
        ])->validate();
        
        if(Auth::attempt($input)){
            return view('home');
        }

    }
}
