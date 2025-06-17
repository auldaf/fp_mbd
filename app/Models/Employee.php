<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\PurchaseOrder;

class Employee extends Model
{
    public $table = 'employees';

    public $fillable = [
        'company',
        'name',
        'email_address',
        'mobile_phone',
        'address'
    ];

    protected $casts = [
        'company' => 'string',
        'name' => 'string',
        'email_address' => 'string',
        'mobile_phone' => 'string',
        'address' => 'string'
    ];

    public static array $rules = [
        'company' => 'nullable|string|max:50',
        'name' => 'nullable|string|max:100',
        'email_address' => 'nullable|string|max:50',
        'mobile_phone' => 'nullable|string|max:25',
        'address' => 'nullable|string'
    ];

    public function orders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Orders::class, 'employee_id');
    }

    public function purchaseOrders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\PurchaseOrders::class, 'created_by');
    }
}
