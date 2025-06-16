<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shippers extends Model
{
    public $table = 'shippers';

    public $fillable = [
        'company',
        'name',
        'email_address',
        'address'
    ];

    protected $casts = [
        'company' => 'string',
        'name' => 'string',
        'email_address' => 'string',
        'address' => 'string'
    ];

    public static array $rules = [
        'company' => 'nullable|string|max:50',
        'name' => 'nullable|string|max:50',
        'email_address' => 'nullable|string|max:50',
        'address' => 'nullable|string'
    ];

    public function orders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Order::class, 'shipper_id');
    }
}
