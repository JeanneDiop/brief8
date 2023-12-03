<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    Public function showRegistrationForm()
    {
return view('auth.register');
    }


    public function create(Request $request){
     return view ('Auth.register');
    }

    public function store(Request $request)
    {
        try {
            // dd($request);
       
        $validated=$request->validate([
            'name'=>['required','string','max:255'],
            'email'=>['required','string','lowercase','email','max:255','unique:' .User::class],
            'password'=>['required'],
            'confirm_password'=>['required', 'same:password']
    

        ]);
        $validated['password']=Hash::make($validated ['password']);

       $user = User::create($validated);
    } catch (\Exception $e) {
    
    }
    }
        
    
      
      
}
