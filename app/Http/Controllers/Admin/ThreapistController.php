<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Therapist;


class ThreapistController extends Controller
{
    //
    public function index(){
    	$therapists = Therapist::latest()->paginate(7);
    	return view('admin.therapist.index',compact('therapists'));
    }

    public function create(){
        return view('admin.therapist.create');
    }

    public function store(Request $request){

    	$this->validation($request);

    	Therapist::create([

    		't_id' => $request->t_id,
    		'first_name' => $request->first_name,
    		'last_name' => $request->last_name,
    		'email' => $request->email

    	]);

    	$notification=array(
	          'messege'=>'Therapist Inserted SuccessFully!',
	          'alert-type'=>'success'
	        );

    	return redirect()->route('admin.therapists')->with($notification);

    }

    public function edit($id){

        $therapist = Therapist::find($id);
        return view('admin.therapist.edit',compact('therapist'));
    }

    public function update(Request $request, $id){

    	$this->validationUpdate($request,$id);

    	Therapist::where('id', $id)->update([

    		'first_name' => $request->first_name,
    		'last_name' => $request->last_name,
    		'email' => $request->email

    	]);

    	$notification=array(
	          'messege'=>'Therapist Updated SuccessFully!',
	          'alert-type'=>'success'
	        );

    	return redirect()->route('admin.therapists')->with($notification);


    }

    public function softDelete($id){

    	Therapist::find($id)->delete();

    	$notification=array(
	          'messege'=>'Therapist Deleted SuccessFully!',
	          'alert-type'=>'success'
	        );

    	return redirect()->back()->with($notification);

    }


    public function validation($request){

    	$request->validate([

    		't_id' => 'required',
    		'first_name' => 'required',
    		'last_name' => 'required',
    		'email' => 'required|unique:therapists',

    	]);

    }

    public function validationUpdate($request,$id){

    	$request->validate([

    		
    		'first_name' => 'required',
    		'last_name' => 'required',
    		'email' => 'required|unique:therapists,email,'.$id,

    	]);

    }

    public function deactivate($id){

    	Therapist::where('id', $id)->update([

    		'is_active' => 0

    	]);

    	$notification=array(
	          'messege'=>'Therapist Deactivate SuccessFully!',
	          'alert-type'=>'success'
	        );

    	return redirect()->back()->with($notification);

    }

    public function activate($id){

    	Therapist::where('id', $id)->update([

    		'is_active' => 1

    	]);

    	$notification=array(
	          'messege'=>'Therapist Activated SuccessFully!',
	          'alert-type'=>'success'
	        );

    	return redirect()->back()->with($notification);

    }
}
