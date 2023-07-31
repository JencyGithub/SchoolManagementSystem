<?php

namespace App\Http\Controllers;

use App\Models\FContact;
use App\Models\FCourse;
use App\Models\Fronted;
use App\Models\StudentReg;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class FrontedController extends Controller
{
    //Page Call
    public function FHome()
    {
        return view('Fronted.FHome');
    }

    public function CorseDataSave(Request $req){

        $req->validate([
            'FName' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'LName' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'Course' => 'required',
            'Phone' => 'required | regex:/^[0-9]{10}/|min:10|max:10',
            'Message' => 'required',
        ]);

        $data = new FCourse();
        $data -> FName = $req -> FName;
        $data -> LName = $req -> LName;
        $data -> Course = $req -> Course;
        $data -> Phone = $req -> Phone;
        $data -> Message = $req -> Message;
        $data ->save();
        return redirect(route('FHome'));
    }

    public function FAbout()
    {
        return view('Fronted.FAbout');
    }

    public function FCourses()
    {
        return view('Fronted.FCourses');
    }

    public function FTeacher()
    {
        return view('Fronted.FTeacher');
    }

    public function FContact()
    {
        return view('Fronted.FContact');
    }

    public function ContactDataSave(Request $req){

        $req->validate([
            'Name' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'Email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'Subject' => 'required',
            'Message' => 'required',
        ]);

        $data = new FContact();
        $data -> Name = $req -> Name;
        $data -> Email = $req -> Email;
        $data -> Subject = $req -> Subject;
        $data -> Message = $req -> Message;
        $data ->save();
        return redirect(route('FContact'));
    }

    public function FLogin(Request $req)
    {
        return view('Fronted.FLogin');
    }

    public function SloginUser(Request $req)
    {
        $req->validate([
            'StudentID' => 'required',
            'password' => 'required | max:10 | min:8',
        ]);
        $Scheckemail = DB::table('fronteds')->where([['StudentID', '=', $req->StudentID]])->get()->first();

        if ($Scheckemail) {
            if (Hash::check($req->password, $Scheckemail->Password)) {
                $req->session()->put('Slogin', $Scheckemail->id);
                return redirect(route('FHome'));
            } else {
                return back()->with('StudentPassword', 'student Password not matched');
            }
        } else {
            return back()->with('StudentEmail', 'student StudentID not matched');
        }
    }

    public function Slogout()
    {
        if (Session()->has('Slogin')) {
            Session()->pull('Slogin');
            return redirect(route('FHome'));
        } else {
            return "Please login account!!";
        }
    }

    public function FRegistration()
    {
        return view('Fronted.FRegistration');
    }

    public function StudentDataSave(Request $req)
    {
        $req->validate([
            'Student_ID' => 'required|regex:/(^ST[0-9 ]+$)+/|min:6|max:6|unique:fronteds,StudentID',
            'Username' => 'required',
            'Email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'MobileNo' => 'required | regex:/^[0-9]{10}/|min:10|max:10',
            'Password' => 'required | max:10 | min:8',
        ]);
        
        $Scheckid = DB::table('student_regs')->where([['StudentID', '=', $req->Student_ID]])->get()->first();

        if ($Scheckid) {

            $Student = new Fronted();
            $Student->StudentID = $req->Student_ID;
            $Student->Username = $req->Username;
            $Student->Email = $req->Email;
            $Student->MobileNo = $req->MobileNo;
            $Student->Password = Hash::make($req->Password);
            $Student->save();

            return redirect(route('FHome'));
        } else {
            return back()->with('StudentID', 'student id not matched');
        }
    }

    public function SResult(Request $req)
    {
        $id = session()->get('Slogin');
        $data = Fronted::find($id);
        $AResult = DB::table('marks_entries')->where([['StudentId', '=', $data->StudentID]])->get();

        $Result = DB::table('marks_entries')->where([['StudentId', '=', $data->StudentID]])->get()->first();

        $SID = DB::table('student_regs')->where([['StudentID', '=', $data->StudentID]])->get()->first();
        return view('Fronted.FResult', compact('AResult', 'Result', 'SID'));
    }

    public function FProfile()
    {
        $id = session()->get('Slogin');
        $data = Fronted::find($id);
        return view('Fronted.FProfile', compact('data'));
    }
    public function FProfileSave(Request $req)
    {
        $id = session()->get('Slogin');
        $data = Fronted::find($id);
        $data->UserName = $req->Name;
        $data->MobileNo = $req->Mnumber;
        $data->save();
        return redirect(route('FProfile'));
    }

    public function CPass()
    {
        $id = session()->get('Slogin');
        $data = Fronted::find($id);
        return view('Fronted.FChangepass', compact('data'));
    }

    public function CPassSave(Request $req)
    {
        $req->validate([
            'OldPass' => 'required',
            'NewPass' => 'required',
            'RetypePass' => 'required',
        ]);

        $id = Session()->get('Slogin');
        $data = Fronted::find($id);
        if (Hash::check($req->OldPass, $data->Password)) {
            if ($req->NewPass == $req->RetypePass) {
                $data->Password = Hash::make($req->RetypePass);
                $data->save();
                return redirect(route('FProfile'));
            } else {
                // return redirect(route(''));
                return "password not matched";
            }
        } else {

            return redirect(route('CPass'))->with('Notfound', 'Old password not matched!!');
        }
    }


    public function FForgetPassopen()
    {
        return view('Fronted.FForgetPass');
    }

    public function FForgetPassSave(Request $req)
    {

        $req->validate([
            'Email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'MobileNo' => 'required | regex:/^[0-9]{10}/|min:10|max:10',
            'StudentID' => 'required',
            'confirmpass' => 'required | max:10 | min:8',
            'Newpass' => 'required | max:10 | min:8',
        ]);
        $data = DB::table('fronteds')->where('StudentID', '=', $req->StudentID)->get()->first();
        if ($data) {
            if ($data->Email == $req->Email) {
                if ($data->MobileNo == $req->MobileNo) {
                    if ($req->confirmpass == $req->Newpass) {
                        DB::table('fronteds') 
                        ->where('id', $data->id)
                        ->update(['Password' => Hash::make($req->Newpass)]);
                        return redirect(route('FLogin'));
                    } else {
                        return back()->with('Password', "New Password and Confirm Password don't matched");
                    }
                } else {
                    return back()->with('MobileNo', 'Mobile No is not matched');
                }
            } else {
                return back()->with('EmailNotMatched', 'Email not matched');
            }
        } else {
            return back()->with('StudentIDNotMatched', 'StudentID id is not matched');
        }
    }
}
