<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function expensetype(){
    	return $this->belongsTo('App\Expensetype');
    }
}
