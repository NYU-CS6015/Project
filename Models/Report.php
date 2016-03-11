<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //

    public function events() {
        return $this->hasOne('Event');
    }  

}
