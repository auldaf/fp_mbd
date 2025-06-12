<?php

namespace App\Repositories;

use App\Models\employees;
use App\Repositories\BaseRepository;

class employeesRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'company',
        'name',
        'email_address',
        'mobile_phone',
        'address'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return employees::class;
    }
}
