<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
    	'project_id','title_video','description_video','source_video','source_poster'
    ];

    public function project(){
    	return $this->belongsTo('App\Project');
    }
}
