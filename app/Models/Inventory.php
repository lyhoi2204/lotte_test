<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{

    const TYPE_IMPORT   = 1;
    const TYPE_EXPORT   = 2;

    protected $fillable = [
        'product_id', 'quantity', 'type',
    ];

}
