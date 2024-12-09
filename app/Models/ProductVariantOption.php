<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariantOption extends Model
{
    protected $fillable = [
        'product_variant_id',
        'option',
        'value'
    ];

    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class);
    }
}
