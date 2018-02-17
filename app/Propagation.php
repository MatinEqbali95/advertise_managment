<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propagation extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
