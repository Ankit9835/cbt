<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;

class OrganisationController extends Controller
{
    //
    public function index(){
    	$organisations = Organisation::latest()->paginate(7);
    	return view('admin.organisation.index',compact('organisations'));
    }

    public function store(Request $request){

    	$this->validation($request);

    	Organisation::create([

    		'organisation_name' => $request->organisation_name,
    		'organisation_id' => $request->organisation_id,
    		'address' => $request->address,
    		'name' => $request->name,
    		'email' => $request->email,
    		'one_month_plan' => $request->one_month_plan,
    		'three_month_plan' => $request->three_month_plan,
    		'six_month_plan' => $request->six_month_plan,
    		'twelve_month_plan' => $request->twelve_month_plan

    	]);

    	$notification=array(
	          'messege'=>'Client Organisation Created SuccessFully!',
	          'alert-type'=>'success'
	        );

    	return redirect()->back()->with($notification);


    }

     public function validation($request){

    	$request->validate([

    		'organisation_name' => 'required',
    		'organisation_id' => 'required',
    		'address' => 'required',
    		'name' => 'required',
    		'email' => 'required|unique:organisations',

    	]);

    }
    public function deactivate($id){

    	Organisation::where('id', $id)->update([

    		'is_active' => 0

    	]);

    	$notification=array(
	          'messege'=>'This Organisation Deactivate SuccessFully!',
	          'alert-type'=>'success'
	        );

    	return redirect()->back()->with($notification);

    }

    public function activate($id){

    	Organisation::where('id', $id)->update([

    		'is_active' => 1

    	]);

    	$notification=array(
	          'messege'=>'This Organisation Activated SuccessFully!',
	          'alert-type'=>'success'
	        );

    	return redirect()->back()->with($notification);

    }

    public function softDelete($id){

    	Organisation::find($id)->delete();

    	$notification=array(
	          'messege'=>'This Client Organisation Deleted SuccessFully!',
	          'alert-type'=>'success'
	        );

    	return redirect()->back()->with($notification);

    }
}
