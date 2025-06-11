<?php

namespace App\Repositories;

use App\Models\Shippers;
use App\Repositories\BaseRepository;

class ShippersRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'company',
        'name',
        'email_address',
        'address'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Shippers::class;
    }
}
