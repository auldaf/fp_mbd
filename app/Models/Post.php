<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'products';

    public $fillable = [
        'supplier_ids',
        'product_code',
        'product_name',
        'description',
        'list_price',
        'product_category',
        'product_image'
    ];

    protected $casts = [
        'supplier_ids' => 'string',
        'product_code' => 'string',
        'product_name' => 'string',
        'description' => 'string',
        'list_price' => 'decimal:4',
        'product_category' => 'string',
        'product_image' => 'string'
    ];

    public static array $rules = [
        'supplier_ids' => 'nullable|string',
        'product_code' => 'nullable|string|max:25',
        'product_name' => 'nullable|string|max:50',
        'description' => 'nullable|string',
        'list_price' => 'required|numeric',
        'product_category' => 'nullable|string|max:50',
        'product_image' => 'required|string'
    ];

    public function inventoryTransactions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\InventoryTransaction::class, 'product_id');
    }

    public function orderDetails(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\OrderDetail::class, 'product_id');
    }

    public function purchaseOrderDetails(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\PurchaseOrderDetail::class, 'product_id');
    }
}
