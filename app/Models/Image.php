<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'imageable_id',
        'imageable_type'
    ];

    // /**
    //  * Get the products for the image.
    //  */
    // public function products()
    // {
    //     return $this->hasOne(Product::class, 'image_id');
    // }

    // public function categoryProducto()
    // {
    //     return $this->hasOneThrough(Category::class, Product::class);
    // }

    /**
     * Get the parent commentable model (post or video).
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
