<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cardname', 'cvv', 'creditcardnumber','price','expirydate', 
    ];

    public function events() {
        return $this->hasOne('Event');
    }  


}
