<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];

    // Relación uno a muchos, una categoría puede tener muchos productos
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
