<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function indexCategory(){
        $categories = Category::select('*')->withTrashed()->paginate(8);
        return view('dashboard.tableCategory')->with('categories', $categories);
    }

    public function createCategory(){
        return view('dashboard.createCategory');
    }

    public function storeCategory(Request $request){
		$category = new Category;
		$filename = time().'.'.$request->img->extension();
		$request->img->move(public_path('category_images'), $filename);
		$category->img = 'category_images/' . $filename;
    	$category->name = $request->name;
        $category->courses = $request->courses;
	    $status = $category->save();
    	return redirect()->back()->with('status', $status);
    }

    public function editCategory($id){
        $category = Category::select('*')->where('id', $id)->first();
    	return view('dashboard.editCategory')->with('category', $category);
    }

    public function updateCategory(Request $request){
    	$category = Category::find($request->id);
		$filename = time().'.'.$request->img->extension();
		$request->img->move(public_path('category_images'), $filename);
		$category->img = 'category_images/' . $filename;
		$category->name = $request->name;
		$category->courses = $request->courses;
    	$status = $category->save();
		return redirect()->back()->with('status', $status);
    }

    public function deleteCategory($id){
    	Category::where('id', $id)->delete();
    	return redirect()->back();
    }

    public function restoreCategory($id){
    	Category::onlyTrashed()->where('id', $id)->restore();
    	return redirect()->back();
    }
}
