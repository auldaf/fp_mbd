<?php

namespace App\Repositories;

use App\Models\customers;
use App\Repositories\BaseRepository;

class customersRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'email_address',
        'mobile_phone',
        'address',
        'membership'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return customers::class;
    }
}
