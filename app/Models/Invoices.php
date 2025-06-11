<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    public $table = 'invoices';

    public $fillable = [
        'order_id',
        'invoice_date',
        'due_date',
        'shipping',
        'amount_due'
    ];

    protected $casts = [
        'invoice_date' => 'datetime',
        'due_date' => 'datetime',
        'shipping' => 'decimal:4',
        'amount_due' => 'decimal:4'
    ];

    public static array $rules = [
        'order_id' => 'nullable',
        'invoice_date' => 'nullable',
        'due_date' => 'nullable',
        'shipping' => 'nullable|numeric',
        'amount_due' => 'nullable|numeric'
    ];

    public function order(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Order::class, 'order_id');
    }
}
