<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class formcontroller extends Controller
{
    public function form(Request $request)
    {
        // $data = [
            
        //     'Name'=>$request->name,
        //     'registration'=>$request->reg,
        //     'cgpa'=>$request->cgpa,
        //     'Specilization'=>$request->pass,
        //     'resume'=>$request->file1
        // ];
        $data =
            $name=$request->name;
            $rege=$request->reg;
            $cgpa=$request->cgpa;
            $spec=$request->pass;
            $file=$request->file1;

        // $array_json=json_encode($data);




        // return redirect('/check')->withCookie(cookie()->forever( 'data',$array_json, 2880));
        // return view('/check')->with(cookie()->forever( 'data',$array_json, 2880));
        // return view('/formData')->with('item',$array_json);
        return view('/formData')->with('name',$name)->with('reg',$rege)->with('cgpa',$cgpa)->with('spec',$spec)->with('file',$file);
    }
}
