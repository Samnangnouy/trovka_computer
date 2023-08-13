<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUse extends Model
{
    use HasFactory;
    protected $table = 'product_uses';
    protected $fillable = [
        'name',
    ];
}
