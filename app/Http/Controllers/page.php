<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page extends Controller
{
    //controller can return a function that return a view
    public function index(){
$name='index';
return view('index')->with('name',$name);

    }


    public function about(){
$name='about';
return view('pages.about')->with('name',$name);

    }

    public function prolanguage(){
$myname= array('name' =>  'Razan','middle'=>'mohammed','last'=>'hammad');
return view('pages.prolanguage')->with('myname',$myname);

    }
}
