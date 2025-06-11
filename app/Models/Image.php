<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'path'
    ];

    /**
     * Get the products for the image.
     */
    public function products()
    {
        return $this->hasOne(Product::class, 'image_id');
    }

    public function categoryProducto()
    {
        return $this->hasOneThrough(Category::class, Product::class);
    }
}
