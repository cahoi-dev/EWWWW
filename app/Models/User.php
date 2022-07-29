<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = [
        "username",
        "password"
    ];

    protected $hidden = [
        "password",
        "token"
    ];


    public function addedItems(): HasMany
    {
        return $this->hasMany(AddedItem::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
