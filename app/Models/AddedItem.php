<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AddedItem extends Model
{
    use HasFactory;

    protected $table = "added_items";
    protected $fillable = [
        "user_id",
        "product_id"
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
