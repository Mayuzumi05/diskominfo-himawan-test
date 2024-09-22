<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $table = "products";
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'name',
        'price',
        'stock',
        'sold',
        'order_id',
        'created_at',
        'updated_at'
    ];

    public function order()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity')->withTimestamps();
    }
}