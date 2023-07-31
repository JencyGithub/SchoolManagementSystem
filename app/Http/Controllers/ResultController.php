<?php

namespace App\Http\Controllers;

use App\Models\Studentclass;
use App\Models\StudentReg;
use App\Models\StudentYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    public function Result()
    {
        $Class = Studentclass::all();
        $Year = StudentYear::all();
        $id = StudentReg::all();
        return view('Result.Result', compact('Class', 'Year', 'id'));
    }

    public function AResult(Request $req)
    {
        $AResult = DB::table('marks_entries')->where([['StudentId', '=', $req->StudentID], ['StudentClass', '=', $req->StudentClass], ['StudentYear', '=', $req->StudentYear]])->get();

        $Result = DB::table('marks_entries')->where([['StudentId', '=', $req->StudentID], ['StudentClass', '=', $req->StudentClass], ['StudentYear', '=', $req->StudentYear]])->get()->first();

        $SID = DB::table('student_regs')->where([['StudentID','=', $req->StudentID]])->get()->first();

        if (count($AResult) > 0) {
            return view('REsult.SResult',compact('AResult','Result','SID'));
        } else {
            return back()->with('Aresult', 'Some values not matched!!');
        }

    }
}
