<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Shippers;
use App\Models\customers;
use App\Models\InventoryTransaction;
use App\Models\Invoices;
use App\Models\OrderDetails;

class Orders extends Model
{
    public $table = 'orders';
    public $timestamps = false;

    public $fillable = [
        'employee_id',
        'customer_id',
        'order_date',
        'shipped_date',
        'shipper_id',
        'ship_name',
        'ship_address',
        'shipping_fee',
        'payment_type',
        'paid_date',
        'status'
    ];

    protected $casts = [
        'order_date' => 'datetime',
        'shipped_date' => 'datetime',
        'ship_name' => 'string',
        'ship_address' => 'string',
        'shipping_fee' => 'decimal:4',
        'payment_type' => 'string',
        'paid_date' => 'datetime',
        'status' => 'string'
    ];

    public static array $rules = [
        'employee_id' => 'nullable',
        'customer_id' => 'nullable',
        'order_date' => 'nullable',
        'shipped_date' => 'nullable',
        'shipper_id' => 'nullable',
        'ship_name' => 'nullable|string|max:50',
        'ship_address' => 'nullable|string',
        'shipping_fee' => 'nullable|numeric',
        'payment_type' => 'nullable|string|max:50',
        'paid_date' => 'nullable',
        'status' => 'nullable|string|max:50'
    ];

    public function shipper(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Shippers::class, 'shipper_id');
    }

    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(customers::class, 'customer_id');
    }

    public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        // return $this->belongsTo(\App\Models\Employee::class, 'employee_id');
        return $this->belongsTo(employees::class);
    }

    public function inventoryTransactions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(InventoryTransaction::class, 'customer_order_id');
    }

    public function invoices(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Invoices::class, 'order_id');
    }

    public function orderDetails(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(OrderDetails::class, 'order_id');
    }
}
