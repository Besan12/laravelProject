<?php

namespace App\Http\Controllers;

use App\Course;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CourseController extends Controller
{
    public function indexCourse(){
        $courses = Course::select('*')->withTrashed()->paginate(10);
        return view('dashboard.tableCourse')->with('courses',$courses);
    }

    public function createCourse(){
        return view('dashboard.createCourse');
    }
    
    public function storeCourse(CourseRequest $request){
        $course = new Course();
        $fileName = time(). '.' .$request->img->extension();
        $request->img->move(public_path('course_images'), $fileName);
        $course->img =  'course_images/'.$fileName;
        $course-> name = $request-> name;
        $course-> description = $request-> description;
        $course-> rate = $request-> rate;
        $course-> price = $request-> price;
        $course-> students = $request-> students;
        $course-> teacher_id = $request-> teacher;
        $status = $course-> save();
        return redirect()->back()->with('status', $status);
    }

    public function editCourse($id){
        $course = Course::find($id)-> Where('id',$id)->first();
        return view('dashboard.editCourse')->with('course',$course);
    }

    public function updateCourse(CourseRequest $request){
        $course = Course::find($request->id);
        $fileName = time(). '.' .$request->img->extension();
        $request->img->move(public_path('course_images'), $fileName);
        $course->img =  'course_images/'.$fileName;
        $course->name = $request->name;
        $course->description = $request->description;
        $course-> rate = $request-> rate;
        $course-> price = $request-> price;
        $course-> students = $request-> students;
        $course-> teacher_id = $request-> teacher;
        $status = $course->save();
        return redirect()->back()->with('status', $status);
    }

    public function deleteCourse($id){
        Course::where('id', $id)->delete();
            return redirect()->back();
    }

    public function restoreCourse($id){
        Course::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back();
    }
}
