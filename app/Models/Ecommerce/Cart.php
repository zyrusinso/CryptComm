<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function getCurrentUserCart()
    {
        $data = static::where('user_id', auth()->id())->get();

        return $data;
    }
}
