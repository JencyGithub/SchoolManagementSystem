<?php

namespace App\Http\Controllers;

use App\Models\StudentSubject;
use App\Models\StudentYear;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function Subject()
    {
        $data['alldata'] = StudentSubject::all();
        return view('Subject.Subject',$data);
    }
    public function SubjectDataSave(Request $req){
        $data = new StudentSubject();
        $data -> Subject = $req -> subject;
        $data -> save();
        return redirect(route('Subject'));
    }

    public function DataUpdate($id){
        $data['all'] = StudentSubject::find($id);
        return view('Subject.EditSubject',$data);
    }

    public function DataUpdateSave(Request $req,$id){
        $data = StudentSubject::find($id);
        $data -> Subject = $req -> Subject;
        $data -> save();
        return redirect(route('Subject'));
    }

    public function DeleteData($id){
        $Del = StudentSubject::find($id);
        $Del -> delete();
        return redirect(route('Subject'));
    }
}
