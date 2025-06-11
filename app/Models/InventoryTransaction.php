<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryTransaction extends Model
{
    public $table = 'inventory_transactions';

    public $fillable = [
        'transaction_type',
        'transaction_created_date',
        'transaction_modified_date',
        'product_id',
        'quantity',
        'purchase_order_id',
        'customer_order_id',
        'comments'
    ];

    protected $casts = [
        'transaction_type' => 'boolean',
        'transaction_created_date' => 'datetime',
        'transaction_modified_date' => 'datetime',
        'comments' => 'string'
    ];

    public static array $rules = [
        'transaction_type' => 'required|boolean',
        'transaction_created_date' => 'nullable',
        'transaction_modified_date' => 'nullable',
        'product_id' => 'required',
        'quantity' => 'required',
        'purchase_order_id' => 'nullable',
        'customer_order_id' => 'nullable',
        'comments' => 'nullable|string|max:255'
    ];

    public function customerOrder(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Order::class, 'customer_order_id');
    }

    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }

    public function purchaseOrder(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\PurchaseOrder::class, 'purchase_order_id');
    }

    public function purchaseOrderDetails(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\PurchaseOrderDetail::class, 'inventory_id');
    }
}
