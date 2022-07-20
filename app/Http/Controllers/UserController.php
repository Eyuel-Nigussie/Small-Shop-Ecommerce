<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
       if(!$user)
       {
           $message = "⚠️ No user by the email address";
           session()->put('errEmail',$message);
           return redirect('login');
       }
       else if(!Hash::check($req->password,$user->password))
       {
            $message = "⚠️ Password does not match with email";
            session()->put('errPassword',$message);
            return redirect('login');
       }
       else
       {
           $req->session()->put('user',$user);
           return redirect('/');
       }

    }//end login

    function signup(Request $req)
    {
        $query = DB::table('users')->insert([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'password' => Hash::make($req->input('password') )
        ]);

        if($query)
        {
            Session()->put('success', 'Signup successful');
            return redirect('/login');
        }
        else
        {
            Session()->put('fail', 'Signup Failed');
            return redirect('/login');
        }
    }

}
