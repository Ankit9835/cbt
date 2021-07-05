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
}
