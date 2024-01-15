<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public $myvar ="hello world";


    public function index(){
        $data=['val_a'=>'hello world!'];
        $data['val_b']="Laravel";
        return view('my-route',$data);
    }
    public function store(Request $req){
        $data=$req->input('numberinput');
        return redirect('/my-route')->with('multiply',$data);

    }




}
