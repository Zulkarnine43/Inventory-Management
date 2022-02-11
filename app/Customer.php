<?php

namespace RainbowDigital;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $fillable = [
        'name', 'email', 'phone','address','shopname','photo','account_holder','account_number','bank_name','bank_branch','city'
    ];
}
