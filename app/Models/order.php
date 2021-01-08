<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'id',
        'meals_id',
        'price',
        'quantity',
        'status',
    ];


    public function meals()
    {
        $this->hasMany(meal::class);
    }
}
