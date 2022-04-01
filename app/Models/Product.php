<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','color', 'size', 'price'];

    public function variations() {
        return $this->hasMany(ProductVariation::class);
    }
}
