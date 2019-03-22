<?php

namespace App\Http\Controllers;

use App\Courses;
use App\SubCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Post;

class CoursesController extends Controller
{

    /*
     * Return Admin panel course controller
     */
    public function getAdminCourses()
    {
        //Do a lot of staffs
        $kid_courses =Courses::where("grade",'=', "kid")->get();
        $adult_courses =Courses::where("grade",'=', "adult")->get();
        return view('admin.courses',['kid_courses' => $kid_courses,'adult_courses' => $adult_courses]);
    }
    /*
     * Create A new course
     */
    public function postAdminCreateCourse(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'grade' => 'required',
        ]);
        $course = new Courses([
            'name' => $request->input('name'),
            'grade' => $request->input('grade'),
        ]);
        $course->save();
        return redirect()->back();
    }
    /*
     * --------Sub Courses ----------
     */
    /*
     * Return Sub Course Admin View
     */
    public function getAdminSubCourse($id)
    {
        $course = Courses::find($id);
        $sub_courses = Courses::find($id)->Sub_Course()->get();
        return view('admin.course_explanation',['course' => $course,'sub_courses' => $sub_courses]);
    }
    /*
     * Create SubCourses
     */
    public function postAdminCreateSubCourses($id,Request $request)
    {
        $this->validate($request,[
            'course_name' => 'required',
            'course_title' => 'required',
            'course_content' => 'required',
        ]);
        //adding sub courses information into the database
        $sub_course = new SubCourse([
            'course_name' => $request->input('course_name'),
            'course_title' => $request->input('course_title'),
            'course_content' => $request->input('course_content'),
            'course_image_name' => $request->file('course_image_name')->getClientOriginalName(),
        ]);
        Input::file('course_image_name')->move('images/course_images',$request->file('course_image_name')->getClientOriginalName());
        $course = Courses::find($id);
        $course->Sub_Course()->save($sub_course);
        return redirect()->back();
    }
    /*-----
     * Delete function
     ------*/
    public function getAdminDeleteCourse($id)
    {
        $course = Courses::find($id);
        $course->Sub_Course()->delete();
        $course->delete();
        return redirect()->route('admin.courses');
    }

    public function getAdminDeleteSubCourse($id)
    {
        $sub_course = SubCourse::find($id);
        $file_path = public_path("images/course_images/{$sub_course->course_image_name}");
        unlink($file_path);
        $sub_course->delete();
        return redirect()->back();
    }
    /*
     * Display in blog View
     */
    //Kid Courses
    public function getKidCourseIndex()
    {
        $kid_courses =Courses::where("grade",'=', "kid")->get();
        $posts =Post::all();
        return view('blog.kid_course',['courses' => $kid_courses,'posts' => $posts]);
    }
    //Adult
    public function getAdultCourseIndex()
    {
        $adult_courses =Courses::where("grade",'=', "adult")->get();
        $posts =Post::all();
        return view('blog.adult_course',['courses' => $adult_courses,'posts' => $posts]);
    }
    //
    public function getSubCourse($id)
    {
        $sub_course = SubCourse::find($id);
        return view('blog.sub_course',['course' => $sub_course]);
    }
}
