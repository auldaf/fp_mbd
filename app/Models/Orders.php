<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Orders
 *
 * @package App\Models
 * @version June 17, 2025, 7:45 pm UTC
 *
 * @property integer $employee_id
 * @property integer $customer_id
 * @property string|\Carbon\Carbon $order_date
 * @property string|\Carbon\Carbon $shipped_date
 * @property integer $shipper_id
 * @property string $ship_name
 * @property string $ship_address
 * @property float $shipping_fee
 * @property string $payment_type
 * @property string|\Carbon\Carbon $paid_date
 * @property string $status
 */
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

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'employee_id' => 'integer',
        'customer_id' => 'integer',
        'order_date' => 'datetime',
        'shipped_date' => 'datetime',
        'shipper_id' => 'integer',
        'ship_name' => 'string',
        'ship_address' => 'string',
        'shipping_fee' => 'decimal:4',
        'payment_type' => 'string',
        'paid_date' => 'datetime',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'employee_id' => 'nullable|integer',
        'customer_id' => 'nullable|integer',
        'order_date' => 'nullable',
        'shipped_date' => 'nullable',
        'shipper_id' => 'nullable|integer',
        'ship_name' => 'nullable|string|max:50',
        'ship_address' => 'nullable|string',
        'shipping_fee' => 'nullable|numeric',
        'payment_type' => 'nullable|string|max:50',
        'paid_date' => 'nullable',
        'status' => 'nullable|string|max:50'
    ];

    public function employee()
    {
        return $this->belongsTo(\App\Models\Employee::class, 'employee_id');
    }
}
