<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderedItem extends Model
{
    use HasFactory;

    protected $table = "ordered_items";
    protected $primaryKey = "id";
    protected $fillable = [
        "order_id",
        "product_id"
    ];


    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
