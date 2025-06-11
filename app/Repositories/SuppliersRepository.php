<?php

namespace App\Repositories;

use App\Models\Suppliers;
use App\Repositories\BaseRepository;

class SuppliersRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'company',
        'name',
        'email_address',
        'business_phone',
        'address'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Suppliers::class;
    }

}
