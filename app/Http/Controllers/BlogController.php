<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function indexBlog(){
        $blogs = Blog::select('*')->withTrashed()->paginate(10);
        return view('dashboard.tableBlog')->with('blogs',$blogs);
    }

    public function createBlog(){
        return view('dashboard.createBlog');
    }

    public function storeBlog(BlogRequest $request){
        $blog = new BLog();
        $fileName = time(). '.' .$request->img->extension();
        $request->img->move(public_path('blog_images'), $fileName);
        $blog->img =  'blog_images/'.$fileName;
        $blog-> name = $request-> name;
        $blog-> description = $request-> description;
        $status = $blog-> save();
        return redirect()->back()->with('status', $status);
    }

    public function editBlog($id){
        $blog = Blog::Select('*')-> Where('id',$id)->first();
        return view('dashboard.editBlog')->with('blog',$blog);
    }
    
    public function updateBlog(BlogRequest $request){
        $blog = Blog::find($request->id);
        $fileName = time(). '.' .$request->img->extension();
        $request->img->move(public_path('blog_images'), $fileName);
        $blog->img =  'blog_images/'.$fileName;
        $blog->name = $request->name;
        $blog->description = $request->description;
        $status = $blog->save();
        return redirect()->back()->with('status', $status);
    }

    public function deleteBlog($id){
        Blog::where('id', $id)->delete();
            return redirect()->back();
    }

    public function restoreBlog($id){
        Blog::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back();
    }
}

