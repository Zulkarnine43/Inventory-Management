<?php

namespace RainbowDigital;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'email', 'phone','address','type','photo','shop','accountholder','accountnumber','bankname','branchname','city'
    ];
}
