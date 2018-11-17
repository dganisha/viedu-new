<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacherconfirmation extends Model
{
    protected $fillable = [
    	'user_id','ktp','verifikasi','bio'
    ];

    public function user(){
    	return $this->hasOne('App\User');
    }
}
