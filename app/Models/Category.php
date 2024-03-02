<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class Category extends Model
{
    use HasFactory;

    public function products(): HasOneOrMany{
        return $this->hasMany(Product::class);
    }
}
