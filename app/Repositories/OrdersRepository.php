<?php

namespace App\Repositories;

use App\Models\Orders;
use App\Repositories\BaseRepository;

class OrdersRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Orders::class;
    }
}
