<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function show_name($id){
        static $students = array(0=>"Ayazhan", 1=>"Aruzhan", 2=>"Dilya");
        return view('nameinfo', ["name" => $students[$id]]);
    }
  
    public function show_date($birthday){
        return view('dateinfo')->with('birthday', $birthday); 
    }
    public function show_age($age){
        return view('ageinfo', compact('age'));

    
    }


}
