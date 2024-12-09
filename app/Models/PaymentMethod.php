<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [
        'user_id',
        'payment_method',
        'payment_token'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
