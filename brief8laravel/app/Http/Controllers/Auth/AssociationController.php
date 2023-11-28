<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Assocation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AssociationController extends Controller
{
    public function someMethod()
    {
        $userCount = User::count();

        // ...
    }
    Public function index(){
        return view('auth.associationregister');
    }
    
    public function create(Request $request){
        return view ('Auth.associationregister');
       }
       Public function store(Request $request){
        {
            try {
                // dd($request);
           
            $validated=$request->validate([
                'name'=>['required','string','max:255'],
                'date_creation'=>['required','date'],
                'slogan'=>['required','string','max:255'],
                'logo'=>['required','image','mimes:jpeg,png,jpg,gif'],
                'email'=>['required','string','lowercase','email','max:255','unique:' .User::class],
                'password'=>['required'],
                'confirm_password'=>['required', 'same:password']
        
    
            ]);
            $validated['password']=Hash::make($validated ['password']);
    
           $association = Assocation::create($validated);

           $image=$request->file('image');
           
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        }
       } 
       Private function storeImage($image){
        return $image->store('image','public');
       }
}
