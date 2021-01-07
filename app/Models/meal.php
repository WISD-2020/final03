<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meal extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'quantity',
        'img',
        'price',
        'type',
    ];
    public function cart()
    {
        $this->hasMany(cart::class);
    }
    public function order()
    {
        $this->hasMany(order::class);
    }
}
