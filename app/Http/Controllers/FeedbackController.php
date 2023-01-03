<?php

namespace App\Http\Controllers;
use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function indexFeedback(){
        $feedbacks = Feedback::select('*')->withTrashed()->paginate(3);
        return view('dashboard.tableFeedback')->with('feedbacks', $feedbacks);
    }

    public function createFeedback(){
        return view('dashboard.createFeedback');
    }
    
    public function storeFeedback(FeedbackRequest $request){
		$feedback = new Feedback;
		$filename = time().'.'.$request->img->extension();
		$request->img->move(public_path('feedback_images'), $filename);
		$feedback->img = 'feedback_images/' . $filename;
    	$feedback->name = $request->name;
        $feedback->profession = $request->profession;
    	$feedback->message = $request->message;
	    $status = $feedback->save();
    	return redirect()->back()->with('status', $status);
    }

    public function editFeedback($id){
        $feedback = Feedback::select('*')->where('id', $id)->first();
    	return view('dashboard.editFeedback')->with('feedback', $feedback);
    }

    public function updateFeedback(FeedbackRequest $request){
    	$feedback = Feedback::find($request->id);
		$filename = time().'.'.$request->img->extension();
		$request->img->move(public_path('feedback_images'), $filename);
		$feedback->img = 'feedback_images/' . $filename;
		$feedback->name = $request->name;
		$feedback->profession = $request->profession;
		$feedback->message = $request->message;
    	$status = $feedback->save();
		return redirect()->back()->with('status', $status);
    }

    public function deleteFeedback($id){
    	Feedback::where('id', $id)->delete();
    	return redirect()->back();
    }

    public function restoreFeedback($id){
    	Feedback::onlyTrashed()->where('id', $id)->restore();
    	return redirect()->back();
    }
}
