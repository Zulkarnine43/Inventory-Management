<?php

namespace RainbowDigital\Imports;

use RainbowDigital\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'product_name'=>$row[0],
            'cat_id'=>$row[1],
            'sup_id'=>$row[2],
            'product_code'=>$row[3],
            'product_garage'=>$row[4],
            'product_route'=>$row[5],
            'product_image'=>$row[6],
            'buy_date'=>$row[7],
            'expire_date'=>$row[8],
            'buying_price'=>$row[9],
            'selling_price'=>$row[10]
        ]);

    }
}
