<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Organisation;
use App\Models\Therapist;
use DB;

class PatientController extends Controller
{
    //
    public function index(){
    	$patients = Patient::latest()->paginate(7);
    	return view('admin.patients.index',compact('patients'));
    }

    public function create(){
    	$org = Organisation::latest()->where('is_active', 1)->get();
    	$therapists = Therapist::latest()->where('is_active', 1)->get();
    	return view('admin.patients.create',compact('org','therapists'));
    }

    public function store(Request $request){

    	 $this->validation($request);
    	//dd($test);
    	Patient::create([

    		'p_id' => $request->p_id,
    		'first_name' => $request->first_name,
    		'last_name' => $request->last_name,
    		'email' => $request->email,
    		'organisation_id' => $request->organisation_id,
			'therapist_id' => $request->therapist_id,
    		'plain' => $request->plain,
    		'start_date' => $request->start_date,
    		'renew' => $request->renew

    	]);

    	$notification=array(
	          'messege'=>'Patient Created SuccessFully!',
	          'alert-type'=>'success'
	        );

    	return redirect()->route('admin.patients')->with($notification);

    }

    public function edit($id){

    	$patient = Patient::find($id);
    	$organisation = Organisation::latest()->where('is_active',1)->get();
    	$therapist = Therapist::latest()->where('is_active',1)->get();
    	return view('admin.patients.edit',compact('patient','organisation','therapist'));
    }

    public function update(Request $request, $id){



    	$this->validationUpdate($request,$id);


    	 Patient::where('id',$id)->update([

    	
    		'first_name' => $request->first_name,
    		'last_name' => $request->last_name,
    		'email' => $request->email,
    		'organisation_id' => $request->organisation_id,
			'therapist_id' => $request->therapist_id,
    		'plain' => $request->plain,
    		'start_date' => $request->start_date,
    		'renew' => $request->renew


    	]);

    	//dd($test);

    	$notification=array(
	          'messege'=>'Patient Updated SuccessFully!',
	          'alert-type'=>'success'
	        );

    	return redirect()->route('admin.patients')->with($notification);



    }

    public function softDelete($id){

    	Patient::find($id)->delete();
    	$notification=array(
	          'messege'=>'Patient Updated SuccessFully!',
	          'alert-type'=>'success'
	        );
    	return redirect()->back()->with($notification);

    }


    public function validation($request){

    	$request->validate([

    		'p_id' => 'required',
    		'first_name' => 'required',
    		'last_name' => 'required',
    		'email' => 'required|unique:patients',
    		'organisation_id' => 'required',
    		'therapist_id' => 'required',
    		'plain' => 'required',
    		'start_date' => 'required',
    		'renew' => 'required',

    	]);

    }

     public function validationUpdate($request,$id){

    	$request->validate([

    		
    		
    		'first_name' => 'required',
    		'last_name' => 'required',
    		'email' => 'required|unique:patients,email,'.$id,
    		'organisation_id' => 'required',
    		'therapist_id' => 'required',
    		'plain' => 'required',
    		'start_date' => 'required',
    		'renew' => 'required',
    		

    	]);

    }

     public function deactivate($id){

    	Patient::where('id', $id)->update([

    		'is_active' => 0

    	]);

    	$notification=array(
	          'messege'=>'This Patient Deactivate SuccessFully!',
	          'alert-type'=>'success'
	        );

    	return redirect()->back()->with($notification);

    }

    public function activate($id){

    	Patient::where('id', $id)->update([

    		'is_active' => 1

    	]);

    	$notification=array(
	          'messege'=>'This Patient Activated SuccessFully!',
	          'alert-type'=>'success'
	        );

    	return redirect()->back()->with($notification);

    }
}
