<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Email;

class SchoolController extends Controller
{
    public function Home()
    {
        return view('Home');
    }

    public function Login()
    {
        return view('Login');
    }

    public function LoginId(Request $req)
    {
        $req->validate([
            'Email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'Password' => 'required | max:10 | min:8'
        ]);

        $login = DB::table('admins')->where('Email', '=', $req->Email)->get()->first();
        if ($login) {
            if (Hash::check($req->Password, $login->Password)) {
                $req->Session()->put('Loginchek', $login->id);
                return redirect(route('Home'));
            } else {
                return back()->with('Password', 'Password is not matched..!!');
            }
        } else {
            return back()->with('Email', 'Your email is not matched..!!');
        }
    }

    public function LogOut()
    {
        if(Session()->has('Loginchek')){
            Session()->pull('Loginchek');
            return redirect(route('Login'));
        }
        else{
            return "You have to login first..!!";
        }
    }
}
