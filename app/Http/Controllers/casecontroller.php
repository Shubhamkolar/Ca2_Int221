<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class casecontroller extends Controller
{
    public function switch(Request $request)
    {
        $data =
            $from=$request->from1;
            $to=$request->to1;
            $msg=$request->text;




        // $array_json=json_encode($data);




        // return redirect('/check')->withCookie(cookie()->forever( 'data',$array_json, 2880));
        // return view('/check')->with(cookie()->forever( 'data',$array_json, 2880));
        // return view('/formData')->with('item',$array_json);
        return view('/switchdata')->with('from',$from)->with('to',$to)->with('message',$msg);
    }
}