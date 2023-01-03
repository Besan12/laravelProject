<?php

namespace App\Http\Controllers;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function indexTeacher(){
        $teachers = Teacher::select('*')->withTrashed()->paginate(10);
        return view('dashboard.tableTeacher')->with('teachers',$teachers);
    }

    public function createTeacher(){
        return view('dashboard.createTeacher');
    }

    public function storeTeacher(TeacherRequest $request){
        $teacher = new Teacher();
        $fileName = time(). '.' .$request->img->extension();
        $request->img->move(public_path('teacher_images'), $fileName);
        $teacher->img =  'teacher_images/'.$fileName;
        $teacher-> name = $request-> name;
        $teacher-> job = $request-> job;
        $status = $teacher-> save();
        return redirect()->back()->with('status', $status);
    }

    public function updateTeacher(TeacherRequest $request){
        $teacher = Teacher::find($request->id);
        $fileName = time(). '.' .$request->img->extension();
        $request->img->move(public_path('teacher_images'), $fileName);
        $teacher->img =  'teacher_images/'.$fileName;
        $teacher->name = $request->name;
        $teacher->job = $request->job;
        $status = $teacher->save();
        return redirect()->back()->with('status', $status);
    }

    public function editTeacher($id){
        $teacher = Teacher::Select('*')-> Where('id',$id)->first();
        return view('dashboard.editTeacher')->with('teacher',$teacher);
    }

    public function deleteTeacher($id){
        Teacher::where('id', $id)->delete();
            return redirect()->back();
    }

    public function restoreTeacher($id){
        Teacher::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back();
    }
}
