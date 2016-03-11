<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    //
public function events() {
        return $this->hasOne('Event');
    }  

}
