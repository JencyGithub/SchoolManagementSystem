<?php

namespace App\Http\Controllers;

use App\Models\Studentclass;
use App\Models\StudentYear;
use Illuminate\Http\Request;

class YearController extends Controller
{
    public function Year()
    {
        $data['alldata'] = StudentYear::all();
        return view('Year.Year',$data);
    }

    public function DataSave(Request $req){
        $data = new StudentYear;
        $data -> Year = $req -> year;
        $data -> save();
        return redirect(route('Year'));
    }

    public function DataUpdate($id){
        $data['all'] = StudentYear::find($id);
        return view('Year.EditYear',$data);
    }

    public function DataUpdateSave(Request $req,$id){
     
        $data = StudentYear::find($id);

        $data -> Year = $req -> Year;
        $data -> save();
        return redirect(route('Year'));
    }

    public function DeleteData($id){
        $Del = StudentYear::find($id);
        $Del -> delete();
        return redirect(route('Year'));
    }
}
