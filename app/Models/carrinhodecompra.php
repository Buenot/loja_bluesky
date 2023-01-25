<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrinhodecompra extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'product_id',
        'user_id'
    ];
}
