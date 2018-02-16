<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['user_id','name','child'];

    public function user(){
        return $this->belongsTo('App\user');
    }
}
