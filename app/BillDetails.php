<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    protected $table = "bill_detail";

    public function product(){
    	return $this->belongsTo('app/Product.php','id_product','id');
    }

    public function bill_detail(){
    	return $this->belongsTo('app/Bill.php','id_bill','id');
    }
}
