<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @package App\Models
 * @version June 17, 2025, 7:50 pm UTC
 *
 * @property string $product_code
 * @property string $product_name
 * @property string $description
 * @property float $list_price
 * @property string $product_category
 */
class Product extends Model
{

    public $table = 'products';
    
    public $timestamps = false;



    public $fillable = [
        'product_code',
        'product_name',
        'description',
        'list_price',
        'product_category'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_code' => 'string',
        'product_name' => 'string',
        'description' => 'string',
        'list_price' => 'decimal:4',
        'product_category' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_code' => 'nullable|string|max:25',
        'product_name' => 'nullable|string|max:50',
        'description' => 'nullable|string',
        'list_price' => 'required|numeric',
        'product_category' => 'nullable|string|max:50'
    ];

    
}
