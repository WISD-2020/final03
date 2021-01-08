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
        'total',
        'quantity',
        'status'
    ];
    /**
     * @var mixed
     */

    public function order()
    {
        $this->hasMany(order::class);
    }
    public function cart()
    {
        $this->hasMany(cart::class);
    }
}
