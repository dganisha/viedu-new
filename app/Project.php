<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
    	'title','description','url_poster','user_id','price','tag','type'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
