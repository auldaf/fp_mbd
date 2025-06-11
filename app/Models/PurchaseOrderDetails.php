<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderDetails extends Model
{
    public $table = 'purchase_order_details';

    public $fillable = [
        'purchase_order_id',
        'product_id',
        'quantity',
        'unit_cost',
        'date_received',
        'posted_to_inventory',
        'inventory_id'
    ];

    protected $casts = [
        'quantity' => 'decimal:4',
        'unit_cost' => 'decimal:4',
        'date_received' => 'datetime',
        'posted_to_inventory' => 'boolean'
    ];

    public static array $rules = [
        'purchase_order_id' => 'required',
        'product_id' => 'nullable',
        'quantity' => 'required|numeric',
        'unit_cost' => 'required|numeric',
        'date_received' => 'nullable',
        'posted_to_inventory' => 'required|boolean',
        'inventory_id' => 'nullable'
    ];

    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }

    public function purchaseOrder(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\PurchaseOrder::class, 'purchase_order_id');
    }

    public function inventory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\InventoryTransaction::class, 'inventory_id');
    }
}
