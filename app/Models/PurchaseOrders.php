<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrders extends Model
{
    public $table = 'purchase_orders';

    public $fillable = [
        'supplier_id',
        'created_by',
        'submitted_date',
        'creation_date',
        'status',
        'expected_date',
        'shipping_fee',
        'payment_date',
        'payment_amount',
        'payment_method'
    ];

    protected $casts = [
        'submitted_date' => 'datetime',
        'creation_date' => 'datetime',
        'status' => 'string',
        'expected_date' => 'datetime',
        'shipping_fee' => 'decimal:4',
        'payment_date' => 'datetime',
        'payment_amount' => 'decimal:4',
        'payment_method' => 'string'
    ];

    public static array $rules = [
        'supplier_id' => 'nullable',
        'created_by' => 'nullable',
        'submitted_date' => 'nullable',
        'creation_date' => 'nullable',
        'status' => 'nullable|string|max:50',
        'expected_date' => 'nullable',
        'shipping_fee' => 'required|numeric',
        'payment_date' => 'nullable',
        'payment_amount' => 'nullable|numeric',
        'payment_method' => 'nullable|string|max:50'
    ];

    public function createdBy(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employee::class, 'created_by');
    }

    public function supplier(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Supplier::class, 'supplier_id');
    }

    public function inventoryTransactions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\InventoryTransaction::class, 'purchase_order_id');
    }

    public function purchaseOrderDetails(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\PurchaseOrderDetail::class, 'purchase_order_id');
    }
}
