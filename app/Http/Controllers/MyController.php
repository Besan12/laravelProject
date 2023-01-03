<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Teacher;
use App\Feedback;
use App\Blog;
use App\Category;
class MyController extends Controller
{

    public function getIndex(){
        $courses = Course::select('*')->paginate(6);
        $blogs = Blog::select('*')->paginate(3);
        $feedbacks = Feedback::select('*')->paginate(3);
        $teachers = Teacher::select('*')->paginate(4);
        $categories = Category::select('*')->paginate(8);
        return view('index')->with(['courses' => $courses , 'blogs' => $blogs , 'feedbacks' => $feedbacks, 'categories' => $categories, 'teachers' => $teachers]);
    }
    public function getContact(){
        return view('contact');
    }
    public function getAbout(){
        $feedbacks = Feedback::select('*')->paginate(3);
        return view('about')->with('feedbacks', $feedbacks);
    }
    public function getBlog(){
        $blogs = Blog::select('*')->paginate(3);
        return view('blog')->with('blogs', $blogs);
    }
    public function getTeacher(){
        $teachers = Teacher::select('*')->paginate(4);
        return view('teacher')->with('teachers', $teachers);
    }
    public function getCourse(){
        $courses = Course::select('*')->paginate(6);
        $categories = Category::select('*')->paginate(8);
        return view('course')->with(['courses' => $courses, 'categories' => $categories]);
    }
    public function getSearch(Request $request){
        $courses = Course::select('*')->where('name','like', $request->course . '%' )->paginate(6);
    	return view('searchCourse')->with('courses' , $courses);
    }
}
