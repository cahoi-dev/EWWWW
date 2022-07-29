<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $primaryKey = "id";
    protected $fillable = [
        "category_id",
        "price",
        "image",
        "name",
        "amount"
    ];


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


//    public function amountStock()
//    {
//        $total = $this->total;
//
//
//
//        return 1;
//    }
//
//
//    public function amountSold()
//    {
//        $sold = ;
//
//        return $sold;
//    }


//    public function orderedItems()
//    {
//
//    }
}
