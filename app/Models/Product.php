<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['nameProducts', 'brand_id', 'stock', 'unit_price', 'imagen'];

    public function brand():BelongsTo{ //La palabra brand puede ser esa u otra cosa
        return $this->belongsTo(Brand::class, 'brand_id'); 
    }
}
