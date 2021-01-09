<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meal extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'name',
        'quantity',
        'img',
        'price',
        'type',
    ];
    public function cart()
    {
        $this->hasMany(detail::class);
    }
    public function order()
    {
        $this->hasMany(order::class);
    }
}
