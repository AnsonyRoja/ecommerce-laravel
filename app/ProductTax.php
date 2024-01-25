<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTax extends Model
{
    protected $table = 'products_taxes';

    public function products()
    {
        return $this->belongsTo("App\Product");
    }

    public function taxes()
    {
        return $this->belongsTo("App\Tax");
    }
}
