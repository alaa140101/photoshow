<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = array('albun_id', 'description', 'title', 'size');

    public function album(){
        return $this->belongsTo('App\album');
    }

}
