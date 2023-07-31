<?php

namespace App\Http\Controllers;

use App\Models\Studentclass;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function Class()
    {
        $data['alldata'] = Studentclass::all();
        return view('Class.Class',$data);
    }

    public function DataSave(Request $req){
        $data = new Studentclass;
        $data -> Class = $req -> Class;
        $data ->save();
        return redirect(route('Class'));
    }

    public function DataUpdate($id){
        $data['all'] = Studentclass::find($id);
        return view('Class.EditClass',$data);
    }

    public function DataUpdateSave(Request $req,$id){

        $data = Studentclass::find($id);

        $data -> Class = $req -> Class;
        $data -> save();
        return redirect(route('Class'));
    }

    public function DeleteData($id){
        $Del = Studentclass::find($id);
        $Del -> Delete();
        return redirect(route('Class'));
    }
}
