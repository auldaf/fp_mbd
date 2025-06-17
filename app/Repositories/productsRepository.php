<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\BaseRepository;

class productsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'supplier_ids',
        'product_code',
        'product_name',
        'description',
        'list_price',
        'product_category'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Product::class;
    }
}
