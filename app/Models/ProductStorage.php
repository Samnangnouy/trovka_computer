<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStorage extends Model
{
    use HasFactory;
    protected $table = 'product_storages';
    protected $fillable = [
        'name',
    ];
}
