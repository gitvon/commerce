<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Category;

class Category extends Model
{
    protected $fillable = ['name', 'description'];
}
