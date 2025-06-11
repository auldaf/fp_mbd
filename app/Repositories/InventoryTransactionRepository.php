<?php

namespace App\Repositories;

use App\Models\InventoryTransaction;
use App\Repositories\BaseRepository;

class InventoryTransactionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'transaction_type',
        'transaction_created_date',
        'transaction_modified_date',
        'product_id',
        'quantity',
        'purchase_order_id',
        'customer_order_id',
        'comments'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return InventoryTransaction::class;
    }
}
