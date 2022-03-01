<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //povezuje sa bazom User i trazi kome pripada post
    public function user(){
        return $this->belongsTo('App\User');
    }
}
