<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';

    protected $guarded = ['id'];


    public function funcion() {
    	return $this->belongsTo('App\Models\Funcion');
    }
}
