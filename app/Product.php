<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['productCode','productName','reorderPoint','idealStock','unitPrice'];
}
