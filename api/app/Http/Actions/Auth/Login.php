<?php

namespace App\Http\Actions\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class Login {

    public function handle(LoginRequest $request) {

        try {

            Log::info("received request to login user account ", [$request]);
            
            if(!Auth::attempt(["email" => $request->email, "password" => $request->password])) {
                return redirect("login")->withErrors([
                    'all' => 'Invalid email or password'
                ]);
            }

            Log::info("user logged in successfully account ");

            if(Auth::user()->role == "student") return redirect("/student");
    
            return redirect("/dashboard");
        } catch(\Exception $e) {

            report($e);
            Log::error("error occured during handling of request");
            return redirect("login");
            
        }

    }
}