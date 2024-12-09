<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    protected $fillable = [
        'user_id',
        'address',
        'city',
        'state',
        'zip_code',
        'country'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
