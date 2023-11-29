<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Assocation;

class LoginAssociationController extends Controller
{
Public function index(){
    return view('auth.loginassociation');
}
Public function create(){
    return view('auth.loginassociation');
}
Public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
 
         if (Auth::guard('assocation')->attempt($credentials)) {
        //    $request->session()->regenerate();
           return redirect()-> back()->with('status','connexion reussi');
 
      
        }
}


}
