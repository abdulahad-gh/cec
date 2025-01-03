<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddStudentController extends Controller
{
    public function addStudent(){
        return view('addStudent');

    }
    public function saveStudentInfo(Request $request){
        return print_r($request->all());
    }
}