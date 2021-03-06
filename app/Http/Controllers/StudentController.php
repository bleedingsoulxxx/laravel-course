<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    public function index(){
    	$students = student::all();
    	return view('students.index',array('students'=> $students));
    }
    public function addStudent(){
    	return view('students.add-student');
    }
     public function store(Request $request){
     	$request-> validate([
     		'first_name' => 'required',
     		'last_name' => 'required',
     	]);

     	$student = new Student;
     	$student->first_name = $request->first_name;
     	$student->middle_name = $request->middle_name ?  $request->middle_name :'N/A';
     	$student->last_name = $request->last_name;
     	$student->save();

    	return redirect()->route ('students.index')->withStatus('Student added.');
}
}
