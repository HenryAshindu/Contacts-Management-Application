<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
//this is the home function that displays all the created and stored data
    public function home(){
        $contacts = Contact::all();
        return view('Home', compact('contacts'));
    }
//this is create function which takes you to the create view
    public function create(){
        return view('Create');
    }
//this is the store data function
    public function store(Request $request){
     $data = new Contact;

     $data->name = $request->name;
     $data->gender = $request->gender;
     $data->contact = $request->contact;

     $Image = $request -> image;
     if($Image){
        $imagename = time().'.'.$Image->getClientOriginalExtension();
        $request->image -> move('images', $imagename);
        $data->image = $imagename;

     $data->save();
     }

     return redirect(route('contact.home'));
    }
//this is the edit data function
    public function edit($id){
        $data = Contact::find($id);
        return view('Edit', compact('data'));
    }
//this is the update data function
    public function update(Request $request, $id){
        $data = Contact::find($id);

        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->contact = $request->contact;
   
        $Image = $request -> image;
        if($Image){
           $imagename = time().'.'.$Image->getClientOriginalExtension();
           $request->image -> move('images', $imagename);
           $data->image = $imagename;
   
        $data->update();
        }
   
        return redirect(route('contact.home'));
    }
//this is the delete data function
    public function destroy($id){
        $data = Contact::find($id);

        $data -> delete();
        return redirect(route('contact.home'));
    }
// this is the grouping function
    public function group(){
        $gender = Contact::selectRaw('name, gender, DATE(created_at) as created_date')
        ->orderByRaw('DATE(created_at) desc')
        ->get()
        ->groupBy('gender');

        return view('Group', compact(var_name:'gender'));
    }

}
