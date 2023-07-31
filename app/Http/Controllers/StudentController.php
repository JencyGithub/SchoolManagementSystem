<?php

namespace App\Http\Controllers;

use App\Models\Studentclass;
use App\Models\StudentReg;
use App\Models\StudentSubject;
use App\Models\StudentYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function Studentreg()
    {
        $Class = Studentclass::all();
        $Year = StudentYear::all();
        return view('Student.Studentreg', compact('Class', 'Year'));
    }

    public function DataSave(Request $req)
    {
        $data = new StudentReg;

        $StID = 'ST' . rand(1000, 9999);
        // return $StID;

        $TableID = DB::table('student_regs')->select('StudentID')->where('StudentID', '=', $StID)->get()->first();

        if ($StID) {
            do {
                $StID = 'ST' . rand(1000, 9999);
                $TableID = DB::table('student_regs')->select('StudentID')->where('StudentID', '=', $StID)->get()->first();
                $data->StudentID = $StID;
            } while ($StID == $TableID);
        } else {
            $data->StudentID = $StID;
        }

        $data->FirstName = $req->FirstName;
        $data->MiddleName = $req->MiddleName;
        $data->LastName = $req->LastName;
        $data->Address = $req->Address;
        $data->Religion = $req->Religion;
        $data->MobileNo = $req->MobileNumber;
        $data->Gender     = $req->Gender;
        $data->DOB = $req->DOB;
        $data->Class = $req->Class;
        $data->Year = $req->Year;
        $data->save();

        return redirect(route('StudentTable'));
    }

    public function StudentTable()
    {
        $data['alldata'] = StudentReg::all();
        return view('Student.StudentTable', $data);
    }

    public function UpdateStudent($id)
    {
        $Class = Studentclass::all();
        $Year = StudentYear::all();
        $all = StudentReg::find($id);
        return view('Student.EditStudent', compact('all', 'Class', 'Year'));
    }

    public function UpdateStudentSave(Request $req, $id)
    {
        $data = StudentReg::find($id);
        $data->FirstName = $req->FirstName;
        $data->MiddleName = $req->MiddleName;
        $data->LastName = $req->LastName;
        $data->Address = $req->Address;
        $data->Religion = $req->Religion;
        $data->MobileNo = $req->MobileNumber;
        $data->Gender     = $req->Gender;
        $data->DOB = $req->DOB;
        $data->Class = $req->Class;
        $data->Year = $req->Year;
        $data->save();
        // return 'page';
        return redirect(route('StudentTable'));
    }

    public function DeleteData($id)
    {
        $Del = StudentReg::find($id);
        $Del->Delete();
        return redirect(route('StudentTable'));
    }
}
