<?php

namespace App\Http\Controllers;

use App\Models\MarksGrade;
use Illuminate\Http\Request;

class MarksGradeController extends Controller
{
    public function MarksGrade()
    {
        $data['alldata'] = MarksGrade::all();
        return view('Marks.MarksGrade',$data);
    }

    public function MarksGradeSave(Request $req){
        $data = new MarksGrade;
        $data -> Grade = $req -> Grade;
        $data -> StartMarks = $req -> StartMarks;
        $data -> EndMarks = $req -> EndMarks;
        $data -> Remarks = $req -> Remarks;
        $data -> save();
        return redirect(route('MarksGrade'));
    }

    public function MarksGradeUpdate($id){
        $data['all'] = MarksGrade::find($id);
        return view('Marks.EditMarksGrade',$data);
    }

    public function MarksGradeUpdateSave(Request $req,$id){
        $data = MarksGrade::find($id);
        $data -> Grade = $req -> Grade;
        $data -> StartMarks = $req -> StartMarks;
        $data -> EndMarks = $req -> EndMarks;
        $data -> Remarks = $req -> Remarks;
        $data -> save();
        return redirect(route('MarksGrade'));
    }

    public function MarksGradeDelete($id){
        $Del = MarksGrade::find($id);
        $Del -> delete();
        return redirect(route('MarksGrade'));
    }

}
