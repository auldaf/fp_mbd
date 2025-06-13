<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    public $table = 'order_details';
    public $timestamps = false;

    public $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'unit_price',
        'discount',
        'status',
        'date_allocated',
        'purchase_order_id',
        'inventory_id'
    ];

    protected $casts = [
        'quantity' => 'decimal:4',
        'unit_price' => 'decimal:4',
        'discount' => 'float',
        'status' => 'string',
        'date_allocated' => 'datetime'
    ];

    public static array $rules = [
        'order_id' => 'required',
        'product_id' => 'nullable',
        'quantity' => 'required|numeric',
        'unit_price' => 'nullable|numeric',
        'discount' => 'required|numeric',
        'status' => 'nullable|string|max:50',
        'date_allocated' => 'nullable',
        'purchase_order_id' => 'nullable',
        'inventory_id' => 'nullable'
    ];

    public function order(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Order::class, 'order_id');
    }

    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }
}
