<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Product extends Model {
    protected $table = 'products';
    protected $columns = [
        'id',
        'name',
        'image',
        'price',
        'date_add',
        'description',
    ];
}