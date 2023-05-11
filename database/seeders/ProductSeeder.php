<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ecommerce\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "title" => "hero Product",
                "description" => "Lorem ipsum dolor sit amet",
                "price" => "99",
                "image" => "assets/img/product.png",
            ],
            [
                "title" => "Product 1",
                "description" => "Lorem ipsum dolor sit amet",
                "price" => "99",
                "image" => "assets/img/product.png",
            ],
            [
                "title" => "Product 2",
                "description" => "Lorem ipsum dolor sit amet",
                "price" => "99",
                "image" => "assets/img/product.png",
            ],
            [
                "title" => "Product 3",
                "description" => "Lorem ipsum dolor sit amet",
                "price" => "99",
                "image" => "assets/img/product.png",
            ],
            [
                "title" => "Product 4",
                "description" => "Lorem ipsum dolor sit amet",
                "price" => "99",
                "image" => "assets/img/product.png",
            ],
            [
                "title" => "Product 5",
                "description" => "Lorem ipsum dolor sit amet",
                "price" => "99",
                "image" => "assets/img/product.png",
            ],
            [
                "title" => "Product 6",
                "description" => "Lorem ipsum dolor sit amet",
                "price" => "99",
                "image" => "assets/img/product.png",
            ],
        ];

        $chunks = collect($data);
        $chunks->each(function ($item) { Product::create($item); });
    }
}

