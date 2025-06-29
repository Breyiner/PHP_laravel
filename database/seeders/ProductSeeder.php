<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(10)->create()->each(function (Product $product) {
            Image::factory(3)->create([
                'imageable_id' => $product->id,
                'imageable_type' => Product::class
            ]);

            // $product->images(rand(1,3))->attach($product->id);
        });
    }
}
