<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function indexContact(){
        $contacts = Contact::select('*')->withTrashed()->paginate(5);
        return view('dashboard.tableContact')->with('contacts', $contacts);
    }

    public function createContact(){
        return view('dashboard.createContact');
    }

    public function storeContact(Request $request){
        $contact = new Contact();
        $contact-> name = $request-> name;
        $contact-> email = $request-> email;
        $contact-> subject = $request-> subject;
        $contact-> message = $request-> message;
        $status = $contact-> save();
        return redirect()->back()->with('status', $status);
    }

    public function editContact($id){
        $contact = Contact::find($id)-> Where('id',$id)->first();
        return view('dashboard.editContact')->with('contact',$contact);
    }

    public function updateContact(Request $request){
        $contact = Contact::find($request->id);
        $contact-> name = $request-> name;
        $contact-> email = $request-> email;
        $contact-> subject = $request-> subject;
        $contact-> message = $request-> message;
        $status = $contact->save();
        return redirect()->back()->with('status', $status);
    }

    public function deleteContact($id){
        Contact::where('id', $id)->delete();
        return redirect()->back();
    }

    public function restoreContact($id){
        Contact::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back();
    }
}
