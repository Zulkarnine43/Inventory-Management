<?php

namespace RainbowDigital;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
     protected $fillable = [
        'purchase_name', 'cat_id','purchase_unit', 'sup_id','purchase_code','purchase_garage','purchase_route','purchase_image','buy_date','expire_date','buying_price','selling_price'
    ];
}
