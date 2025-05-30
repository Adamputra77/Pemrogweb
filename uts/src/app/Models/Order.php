<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'size',
        'total_price',
        'payment_method',
        'shipping_address',
        'order_code',
        'user_id',
        'payment_status'
    ];

    protected $casts = [
        'payment_details' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            // Generate order code jika belum ada
            if (empty($order->order_code)) {
                $order->order_code = self::generateOrderCode();
            }
            
            // Set user_id jika belum ada
            if (empty($order->user_id) && auth()->check()) {
                $order->user_id = auth()->id();
            }
            
            // Default payment status
            if (empty($order->payment_status)) {
                $order->payment_status = 'pending';
            }
        });
    }

    public static function generateOrderCode()
    {
        $prefix = 'ORD';
        $date = now()->format('Ymd');
        $random = strtoupper(Str::random(4));
        
        return "{$prefix}-{$date}-{$random}";
    }
}