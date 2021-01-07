<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = 'details';

    protected $fillable = [
        'id',
        'meals_id',
        'price',
        'quantity',
        'status'
    ];
    public function order()
    {
        $this->hasMany(order::class);
    }
}
