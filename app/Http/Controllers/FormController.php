<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function test1()
    {
        if(!isset($_POST["name1"])){
            $bau="Hello! Please input your name: <br/>";
        }else{
            $bau="Good morning <b>".$_POST["name1"]."</b><br/>";
        }
        return view('pages.test1')->with('bau',$bau);
    }
}
