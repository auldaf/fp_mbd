<?php

namespace App\Repositories;

use App\Models\PurchaseOrders;
use App\Repositories\BaseRepository;

class PurchaseOrdersRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'supplier_id',
        'created_by',
        'submitted_date',
        'creation_date',
        'status',
        'expected_date',
        'shipping_fee',
        'payment_date',
        'payment_amount',
        'payment_method'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return PurchaseOrders::class;
    }
}
