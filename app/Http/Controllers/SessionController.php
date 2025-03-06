<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    //
    public function create(){
        return view("auth.login");
    }
    public function store(){
        
        $attributes = request()->validate([
            "email" => ["required","email"],
            "password"=> ["required"],
        ]);

        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                "email"=> "Credintial does not Match",
    
            ]);
        }
        request()->session()->regenerate();
        return redirect("/");

    }
    public function destroy(){
        Auth::logout();
        return redirect("/");
    }
}
