<?php

namespace App\Repositories;

use App\Models\Invoices;
use App\Repositories\BaseRepository;

class InvoicesRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'order_id',
        'invoice_date',
        'due_date',
        'shipping',
        'amount_due'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Invoices::class;
    }
}
