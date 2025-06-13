<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    public $table = 'customers';

    public $fillable = [
        'name',
        'email_address',
        'mobile_phone',
        'address',
        'membership'
    ];

    protected $casts = [
        'name' => 'string',
        'email_address' => 'string',
        'mobile_phone' => 'string',
        'address' => 'string',
        'membership' => 'boolean'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:100',
        'email_address' => 'nullable|string|max:50',
        'mobile_phone' => 'nullable|string|max:25',
        'address' => 'nullable|string',
        'membership' => 'nullable|boolean'
    ];

    public function orders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Order::class, 'customer_id');
    }
}
