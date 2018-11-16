<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'user_id','project_id','price','status_pembayaran'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function project(){
    	return $this->belongsTo('App\Project');
    }

}
