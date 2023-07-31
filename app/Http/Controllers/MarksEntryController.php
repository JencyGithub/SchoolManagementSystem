<?php

namespace App\Http\Controllers;

use App\Models\MarksEntry;
use App\Models\MarksGrade;
use App\Models\Studentclass;
use App\Models\StudentReg;
use App\Models\StudentSubject;
use App\Models\StudentYear;
use Illuminate\Http\Request;

class MarksEntryController extends Controller
{
    public function MarksEntry()
    {
        $Data = MarksEntry::all();
        $Student = StudentReg::all();
        $Class = Studentclass::all();
        $Year = StudentYear::all();
        $Subject = StudentSubject::all();
        $Grade = MarksGrade::all();
        return view('Marks.MarksEntry',compact('Student','Class','Year','Subject','Grade','Data'));
    }

    public function MarksEntrySave(Request $req){
        $data = new MarksEntry;
        $data -> StudentId = $req -> StudentID;
        $data -> StudentClass = $req -> StudentClass;
        $data -> StudentYear = $req -> StudentYear;
        $data -> StudentSubject = $req -> StudentSubject;
        $data -> StudentGrade = $req -> StudentGrade;
        $data -> TotalMarks = $req -> TotalMarks;
        $data -> ObtainMarks = $req -> ObtainMarks;
        $data -> save();
        return redirect(route('MarksEntry'));
    }

    public function MarksEntryUpdate($id){
        $data = MarksEntry::find($id);
        $Student = StudentReg::all();
        $Class = Studentclass::all();
        $Year = StudentYear::all();
        $Subject = StudentSubject::all();
        $Grade = MarksGrade::all();
        return view('Marks.EditMarksEntry',compact('Student','Class','Year','Subject','Grade','data'));
    }

    public function MarksEntryUpdateSave(Request $req,$id){
        $data = MarksEntry::find($id);
        $data -> StudentId = $req -> StudentID;
        $data -> StudentName = $req -> StudentName;
        $data -> StudentClass = $req -> StudentClass;
        $data -> StudentYear = $req -> StudentYear;
        $data -> StudentSubject = $req -> StudentSubject;
        $data -> StudentGrade = $req -> StudentGrade;
        $data -> TotalMarks = $req -> TotalMarks;
        $data -> ObtainMarks = $req -> ObtainMarks;
        $data -> save();
        return redirect(route('MarksEntry'));
    }

    public function MarksEntryDelete($id){
        $Del = MarksEntry::find($id);
        $Del -> delete();
        return redirect(route('MarksEntry'));
    }
}
