<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\MarksEntry;
use App\Models\MarksGrade;
use Illuminate\Http\Request;
use App\Models\Studentclass;
use App\Models\StudentReg;
use App\Models\StudentSubject;
use App\Models\StudentYear;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class APIController extends Controller
{
    public function APIClass()
    {
        $APIdata = Studentclass::all();

        if (!(count($APIdata) >= 1)) {

            $APICdata['status'] = 0;
            $APICdata['message'] = "No recored found";
            return $APICdata;
        } else {
            $APICdata['status'] = 1;
            $APICdata['message'] = "data featched successfully";
            $APICdata['data'] = Studentclass::all();
            return $APICdata;
        }
    }

    public function APIClassSave(Request $req)
    {
        if ($req->Class == NULL) {
            return "Data Not Found!!";
        } else {
            $data = new Studentclass;
            $data->Class = $req->Class;
            $data->save();

            return "data featched successfully!!";
        }
    }

    public function APIClassUpdate(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id not found!!!";
        } else {
            $Update = Studentclass::find($id);
            if ($Update) {
                $Update->Class = $req->Class;
                $Update->save();
                return "Data Updated Successfully!!!";
            } else {
                return "Id not matched!!!";
            }
        }
    }

    public function APIClassDelete(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id Not Found for Deleted!!";
        } else {
            $Del = Studentclass::find($id);
            if ($Del) {
                $Del->delete();
                return "Data Deleted Succefully";
            } else {
                return "Id Not Found On Table!!";
            }
        }
    }

    public function APIYear()
    {
        $APIdata = StudentYear::all();

        if (!(count($APIdata) >= 1)) {
            $APICdata['status'] = 0;
            $APICdata['message'] = "No recored found";
            return $APICdata;
        } else {
            $APICdata['status'] = 1;
            $APICdata['message'] = "data featched successfully";
            $APICdata['data'] = StudentYear::all();
            return $APICdata;
        }
    }

    public function APIYearSave(Request $req)
    {
        if ($req->year == NULL) {
            return "Data Not Found!!";
        } else {
            $data = new StudentYear;
            $data->Year = $req->year;
            $data->save();
            return "data featched successfully!!";
        }
    }

    public function APIYearUpdate(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id not found!!!";
        } else {
            $Update = StudentYear::find($id);
            if ($Update) {
                $Update->Year = $req->year;
                $Update->save();
                return "Data Updated Successfully!!!";
            } else {
                return "Id not matched!!!";
            }
        }
    }

    public function APIYearDelete(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id Not Found for Deleted!!";
        } else {
            $Del = StudentYear::find($id);
            if ($Del) {
                $Del->delete();
                return "Data Deleted Succefully";
            } else {
                return "Id Not Found On Table!!";
            }
        }
    }

    public function APISubject()
    {
        $APIdata = StudentSubject::all();

        if (!(count($APIdata) >= 1)) {

            $APICdata['status'] = 0;
            $APICdata['message'] = "No recored found";
            return $APICdata;
        } else {
            $APICdata['status'] = 1;
            $APICdata['message'] = "data featched successfully";
            $APICdata['data'] = StudentSubject::all();
            return $APICdata;
        }
    }

    public function APISubjectSave(Request $req)
    {
        if ($req->subject == NULL) {
            return "Data Not Found!!";
        } else {
            $data = new StudentSubject();
            $data->Subject = $req->subject;
            $data->save();
            return "data featched successfully!!";
        }
    }

    public function APISubjectUpdate(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id not found!!!";
        } else {
            $Update = StudentSubject::find($id);
            if ($Update) {
                $Update->Subject = $req->subject;
                $Update->save();
                return "Data Updated Successfully!!!";
            } else {
                return "Id not matched!!!";
            }
        }
    }

    public function APISubjectDelete(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id Not Found for Deleted!!";
        } else {
            $Del = StudentSubject::find($id);
            if ($Del) {
                $Del->delete();
                return "Data Deleted Succefully";
            } else {
                return "Id Not Found On Table!!";
            }
        }
    }

    public function APIMarksEntry()
    {
        $APIdata = MarksEntry::all();

        if (!(count($APIdata) >= 1)) {
            $APICdata['status'] = 0;
            $APICdata['message'] = "No recored found";
            return $APICdata;
        } else {
            $APICdata['status'] = 1;
            $APICdata['message'] = "data featched successfully";
            $APICdata['data'] = MarksEntry::all();
            return $APICdata;
        }
    }

    public function APIMarksEntrySave(Request $req)
    {
        if (
            ($req->StudentID == NULL)
            &&
            ($req->StudentClass == NULL)
            &&
            ($req->StudentYear == NULL)
            &&
            ($req->StudentSubject == NULL)
            &&
            ($req->StudentGrade == NULL)
            &&
            ($req->TotalMarks == NULL)
            &&
            ($req->ObtainMarks == NULL)
        ) {
            return "Data Not Found!!";
        } else {
            $data = new MarksEntry();
            $data->StudentId = $req->StudentID;
            $data->StudentClass = $req->StudentClass;
            $data->StudentYear = $req->StudentYear;
            $data->StudentSubject = $req->StudentSubject;
            $data->StudentGrade = $req->StudentGrade;
            $data->TotalMarks = $req->TotalMarks;
            $data->ObtainMarks = $req->ObtainMarks;
            $data->save();
            return "data featched successfully!!";
        }
    }

    public function APIMarksEntryUpdate(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id not found!!!";
        } else {
            $Update = MarksEntry::find($id);
            if ($Update) {
                $Update->StudentId = $req->StudentID;
                $Update->StudentClass = $req->StudentClass;
                $Update->StudentYear = $req->StudentYear;
                $Update->StudentSubject = $req->StudentSubject;
                $Update->StudentGrade = $req->StudentGrade;
                $Update->TotalMarks = $req->TotalMarks;
                $Update->ObtainMarks = $req->ObtainMarks;
                $Update->save();
                return "Data Updated Successfully!!!";
            } else {
                return "Id not matched!!!";
            }
        }
    }

    public function APIMarksEntryDelete(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id Not Found for Deleted!!";
        } else {
            $Del = MarksEntry::find($id);
            if ($Del) {
                $Del->delete();
                return "Data Deleted Succefully";
            } else {
                return "Id Not Found On Table!!";
            }
        }
    }

    public function APIMarksGrade()
    {
        $APIdata = MarksGrade::all();

        if (!(count($APIdata) >= 1)) {

            $APICdata['status'] = 0;
            $APICdata['message'] = "No recored found";
            return $APICdata;
        } else {
            $APICdata['status'] = 1;
            $APICdata['message'] = "data featched successfully";
            $APICdata['data'] = MarksGrade::all();
            return $APICdata;
        }
    }

    public function APIMarksGradeSave(Request $req)
    {
        if (
            ($req->Grade == NULL)
            &&
            ($req->StartMarks == NULL)
            &&
            ($req->EndMarks == NULL)
            &&
            ($req->Remarks == NULL)
        ) {
            return "Data Not Found!!";
        } else {
            $data = new MarksGrade;
            $data->Grade = $req->Grade;
            $data->StartMarks = $req->StartMarks;
            $data->EndMarks = $req->EndMarks;
            $data->Remarks = $req->Remarks;
            $data->save();
            return "data featched successfully!!";
        }
    }

    public function APIMarksGradeUpdate(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id not found!!!";
        } else {
            $Update = MarksGrade::find($id);
            if ($Update) {
                $Update->Grade = $req->Grade;
                $Update->StartMarks = $req->StartMarks;
                $Update->EndMarks = $req->EndMarks;
                $Update->Remarks = $req->Remarks;
                $Update->save();
                return "Data Updated Successfully!!!";
            } else {
                return "Id not matched!!!";
            }
        }
    }

    public function APIMarksGradeDelete(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id Not Found for Deleted!!";
        } else {
            $Del = MarksGrade::find($id);
            if ($Del) {
                $Del->delete();
                return "Data Deleted Succefully";
            } else {
                return "Id Not Found On Table!!";
            }
        }
    }

    public function APIStudentReg()
    {
        $APIdata = StudentReg::all();

        if (!(count($APIdata) >= 1)) {

            $APICdata['status'] = 0;
            $APICdata['message'] = "No recored found";
            return $APICdata;
        } else {
            $APICdata['status'] = 1;
            $APICdata['message'] = "data featched successfully";
            $APICdata['data'] = StudentReg::all();
            return $APICdata;
        }
    }

    public function APIStudentRegSave(Request $req)
    {
        if (
            ($req->FirstName == NULL)
            &&
            ($req->MiddleName == NULL)
            &&
            ($req->LastName == NULL)
            &&
            ($req->Address == NULL)
            &&
            ($req->Religion == NULL)
            &&
            ($req->MobileNumber == NULL)
            &&
            ($req->Gender == NULL)
            &&
            ($req->DOB == NULL)
            &&
            ($req->Class == NULL)
            &&
            ($req->Year == NULL)
        ) {
            return "Data Not Found!!";
        } else {
            $data = new StudentReg;
            $data->StudentID = $req->StudentID;
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
            return "data featched successfully!!";
        }
    }

    public function APIStudentRegUpdate(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id not found!!!";
        } else {
            $Update = StudentReg::find($id);
            if ($Update) {
                $Update->StudentID = $req->StudentID;
                $Update->FirstName = $req->FirstName;
                $Update->MiddleName = $req->MiddleName;
                $Update->LastName = $req->LastName;
                $Update->Address = $req->Address;
                $Update->Religion = $req->Religion;
                $Update->MobileNo = $req->MobileNumber;
                $Update->Gender = $req->Gender;
                $Update->DOB = $req->DOB;
                $Update->Class = $req->Class;
                $Update->Year = $req->Year;
                $Update->save();
                return "Data Updated Successfully!!!";
            } else {
                return "Id not matched!!!";
            }
        }
    }

    public function APIStudentRegDelete(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id Not Found for Deleted!!";
        } else {
            $Del = StudentReg::find($id);
            if ($Del) {
                $Del->delete();
                return "Data Deleted Succefully";
            } else {
                return "Id Not Found On Table!!";
            }
        }
    }

    public function APIAdmin()
    {
        $APIdata = Admin::all();

        if (!(count($APIdata) >= 1)) {

            $APICdata['status'] = 0;
            $APICdata['message'] = "No recored found";
            return $APICdata;
        } else {
            $APICdata['status'] = 1;
            $APICdata['message'] = "data featched successfully";
            $APICdata['data'] = Admin::all();
            return $APICdata;
        }
    }

    public function APIAdminSave(Request $req)
    {
        if (
            ($req->FName == NULL)
            &&
            ($req->LName == NULL)
            &&
            ($req->Gender == NULL)
            &&
            ($req->Stream == NULL)
            &&
            ($req->DOB == NULL)
            &&
            ($req->Email == NULL)
            &&
            ($req->Password == NULL)
        ) {
            return "Data Not Found!!";
        } else {
            $data = new Admin();
            $data->FName = $req->FName;
            $data->LName = $req->LName;
            $data->Gender = $req->Gender;
            $data->Stream = $req->Stream;
            $data->DOB = $req->DOB;
            $data->Email = $req->Email;
            $data->Password = Hash::make('$req->Password');
            $data->save();
            return "data featched successfully!!";
        }
    }

    public function APIAdminUpdate(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id not found!!!";
        } else {
            $Update = Admin::find($id);
            if ($Update) {
                $Update->FName = $req->FName;
                $Update->LName = $req->LName;
                $Update->Gender = $req->Gender;
                $Update->Stream = $req->Stream;
                $Update->DOB = $req->DOB;
                $Update->Email = $req->Email;
                $Update->Password = $req->Password;
                $Update->save();
                return "Data Updated Successfully!!!";
            } else {
                return "Id not matched!!!";
            }
        }
    }

    public function APIAdminDelete(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id Not Found for Deleted!!";
        } else {
            $Del = Admin::find($id);
            if ($Del) {
                $Del->delete();
                return "Data Deleted Succefully";
            } else {
                return "Id Not Found On Table!!";
            }
        }
    }

    public function APILogIn(Request $req)
    {
        $req->validate([
            'Email' => 'required|regex:/(.+)@(.+)\.(.+)/i'
        ]);

         $login = DB::table('admins')->where('Email', '=', $req->Email)->get()->first();
        if ($login) {
            if (Hash::check($req->Password, $login->Password)) {
                // $req->Session()->put('Loginchek', $login->id);
                return "LogIn Successfully";
            } else {
                return "Password is not matched..!!";
            }
        } else {
            return "Your email is not matched..!!";
        }
    }

}