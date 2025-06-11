<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    public $table = 'suppliers';
    public $timestamps = false;



    public $fillable = [
        'company',
        'name',
        'email_address',
        'business_phone',
        'address'
    ];

    protected $casts = [
        'company' => 'string',
        'name' => 'string',
        'email_address' => 'string',
        'business_phone' => 'string',
        'address' => 'string'
    ];

    public static array $rules = [
        'company' => 'nullable|string|max:50',
        'name' => 'nullable|string|max:50',
        'email_address' => 'nullable|string|max:50',
        'business_phone' => 'nullable|string|max:25',
        'address' => 'nullable|string'
    ];

    public function purchaseOrders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\PurchaseOrder::class, 'supplier_id');
    }
}
