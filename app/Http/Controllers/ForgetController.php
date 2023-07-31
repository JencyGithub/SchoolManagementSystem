<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class ForgetController extends Controller
{
    public function Forget()
    {
        return view('Forget');
    }

    public function ChangePass(Request $req)
    {
        $req->validate([
            'Email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'MobileNo' => 'required | regex:/^[0-9]{10}/|min:10|max:10',
            'DOB' => 'required'
        ]);
        $data = DB::table('admins')->where('Email','=',$req->Email)->get()->first();
        if($data){
            if($data->DOB == $req->DOB){
                if($data->MobileNo == $req->MobileNo){
                    $req->session()->put('ForgetPassword',$data->id);
                    return redirect(route('SavePage'));
                }
                else{
                    return back()->with('MobileNo','Mobile No is not matched');
                }
            }
            else{
                return back()->with('DOBNotMatched','Date Of Birth is not matched');
            }
        }
        else{
            return back()->with('EmailNotMatched','Email id is not matched');
        }
        
    }

    public function SavePage(){
        return view('ChangePass');
    }

    public function SavePassword(Request $req){

        $req->validate([
            'password' => 'required | max:10 | min:8',
            'Rpassword' => 'required | max:10 | min:8'
        ]);

        $id = Session()->get('ForgetPassword');
        $data = Admin::find($id);
        if($data){
            if($req->password == $req->Rpassword){
                $data->Password = Hash::make($req->password);
                $data->save();
                Session()->pull('ForgetPassword');

                return redirect(route('Login'));
            }
            else{
                // return redirect(route(''));
                return back()->with('password','password not matched');
            }
        }
        else{

            return redirect(route('Login'))->with('Notfound','You can not able to change your password');
        }
        
    }

 
}
