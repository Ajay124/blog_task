<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;


class UserController extends Controller
{
    public function Signup(Request $request){

        $this->validate($request,['email' =>'required|email','password' =>'required','password_c' =>'required' ]);
    
        if($request->password == $request->password_c) {
            $user =  User::where('email',$request->email)->first();   
            if($user) {
                return back()->withSuccess("User already exists!");
            } else {
                $user =  User::create([
                    'email' => $request->email,
                    'password' => bcrypt($request->password)]);
    
                $request->session()->put([
                        'user_id'=> $user->id,
                        'email'=> $user->email,
                        ]);
            }
           
        }else{
            return back()->witherror("Password not match");
        }
        return back()->withSuccess("Register Successfully");
    }

    public function Login(Request $request){

        $this->validate($request,['email' =>'required|email','password' =>'required' ]);
        
        $user =  User::where('email',$request->email)->first();   
        if($user){
            if(Hash::check($request->password ,$user->password)){

                $request->session()->put([
                    'user_id'=> $user->id,
                    'name'=> $user->name,
                    'email'=> $user->email,
                    'role' => 0
                    ]);
                return redirect('/');   
                }else{
                    return back()->witherror("Password not match");
                }
        } else {
            return back()->witherror("User not Exits");
        }
    return redirect('/'); 
    }


    public function UserLogout(Request $request){
        $request->session()->forget('role');
        return redirect('/')->withSuccess('Logout Successfully');
    }
   
}
