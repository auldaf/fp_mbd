<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shippers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shippers';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company',
        'name',
        'email_address',
        'address',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company' => 'string',
        'name' => 'string',
        'email_address' => 'string',
        'address' => 'string',
    ];
}
