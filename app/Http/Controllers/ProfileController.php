<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function Profile()
    {
        $id = Session()->get('Loginchek');
        $data['alldata'] = Admin::find($id);
        return view('Profile.profile', $data);
    }

    public function ChangePassword()
    {
        return view('Profile.ChangePassword');
    }

    public function ProfileUpdate($id)
    {
        // return "save";
        $data['all'] = Admin::find($id);
        return view('Profile.ManageProfile', $data);
    }

    public function ProfileUpdateSave(Request $req, $id)
    {
        $data = Admin::find($id);
        $data->FName = $req->FirstName;
        $data->LName = $req->LastName;
        $data->Gender = $req->Gender;
        $data->Stream = $req->Stream;
        $data->DOB = $req->DOB;
        $data->MobileNo = $req->MobileNo;
        $data->Email = $req->Email;
        $data->save();
        return redirect(route('Profile'));
    }

    public function ChangePass(Request $req)
    {
        $req->validate([
            'OldPass' => 'required | max:10 | min:8',
            'NewPass' => 'required | max:10 | min:8',
            'ConfirmPass' => 'required | max:10 | min:8'
        ]);

        $id = Session()->get('Loginchek');
        $data = Admin::find($id);
        if (Hash::check($req->OldPass, $data->Password)) {
            if ($req->NewPass == $req->ConfirmPass) {
                $data->Password = Hash::make($req->NewPass);
                $data->save();
                return redirect(route('Profile'));
            } else {
                return back()->with('NewPassword', 'New password and old password not valid..!!');
            }
        } else {
            return back()->with('Oldpassword', 'Old password is not valid');
        }
    }
}
