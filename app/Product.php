<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Product;

class Product extends Model
{
    protected $fillable = ['name', 'description','price'];
}
