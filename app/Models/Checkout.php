<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'payment_method',
        'payment_status',
        'total',
    ];

    /**
     * Get the user that owns the checkout.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the order that owns the checkout.
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * The payments that belong to the checkout.
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
