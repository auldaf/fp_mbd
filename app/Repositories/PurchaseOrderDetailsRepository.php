<?php

namespace App\Repositories;

use App\Models\PurchaseOrderDetails;
use App\Repositories\BaseRepository;

class PurchaseOrderDetailsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'purchase_order_id',
        'product_id',
        'quantity',
        'unit_cost',
        'date_received',
        'posted_to_inventory',
        'inventory_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return PurchaseOrderDetails::class;
    }
}
