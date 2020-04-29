<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bill";

    public function bill_detail(){
    	return $this->hasMany('app/BillDetails.php','id_bill','id');
    }

    public function custumer(){
    	return $this->belongsTo('app/Customer.php','id_customer','id');
    }
}
