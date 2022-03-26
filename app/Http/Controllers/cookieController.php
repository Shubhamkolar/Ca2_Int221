<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Cookie\CookieServiceProvider;

class cookieController extends Controller
{
    public function SetCookie(Request $request)
    {
        // $data = [
        //     'name'=>$request->name,
        //     'password'=>$request->pass,
        // ];
        $data =
            $name=$request->name;

$password=$request->pass;


        // $array_json=json_encode($data);




        // return redirect('/check')->withCookie(cookie()->forever( 'data',$array_json, 2880));
        // return view('/check')->with(cookie()->forever( 'data',$array_json, 2880));
        return view('/check')->with('item',$name)->with('user',$password);
    }

// public function GetCookie(Request $request)
// {
// echo "jhkj";
// $cdata=$request->data;
// if($cdata){
// echo "yes";
// }else{echo "no";}
// }




    // public function checkout(){
    //     $data=\cookieSet::get('data');
    //     $data=json_decode($data);

    //     return view('home/checkout')->with('data', $data);;
    // }
}
