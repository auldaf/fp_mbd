<?php

namespace App\Repositories;

use App\Models\OrderDetails;
use App\Repositories\BaseRepository;

class OrderDetailsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'order_id',
        'product_id',
        'quantity',
        'unit_price',
        'discount',
        'status',
        'date_allocated',
        'purchase_order_id',
        'inventory_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return OrderDetails::class;
    }
}
