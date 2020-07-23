<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function program(){
        return $this->belongsTo('App\Programme');
    }
    
  
     public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
