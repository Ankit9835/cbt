<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $guarded = [];

    public function organisation(){
    	return $this->belongsTo('App\Models\Organisation');
    }

    public function therapist(){
    	return $this->belongsTo('App\Models\Therapist');
    }
}
