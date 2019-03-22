<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Student;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

class StudentController extends Controller
{


    public function postStudent(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'family_name' => 'required',
            'SSN' => 'required',
            'phone' => 'required',
            'age' => 'required',
        ]);
        $student = new Student([
            'name'=>$request->input('name'),
            'family_name'=>$request->input('family_name'),
            'SSN'=>$request->input('SSN'),
            'phone'=>$request->input('phone'),
            's_phone'=>$request->input('s_phone'),
            'city'=>$request->input('city'),
            'age'=>$request->input('age'),
            'email'=>$request->input('email'),
            'gender'=>$request->input('gender')
        ]);
        $student->save();
        return redirect()->back()->with('info','ثبت نام با موفقیت انجام شد');
    }
    public function getStudent()
    {
        $students = Student::all();
        return view('admin.student',['students' => $students]);
    }
}
