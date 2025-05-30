<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Sneakers Casual',
                'slug' => 'sneakers-casual',
                'price' => 499000,
                'sizes' => ['36', '37', '38', '39', '40', '41', '42'],
                'image' => 'sneakers-casual.jpg',
                'category' => 'Sneakers',
                'short_desc' => 'Sepatu kasual nyaman untuk aktivitas sehari-hari',
                'is_active' => true
            ],
            [
                'name' => 'Sepatu Running',
                'slug' => 'sepatu-running',
                'price' => 599000,
                'sizes' => ['36', '37', '38', '39', '40', '41', '42'],
                'image' => 'sepatu-running.jpg',
                'category' => 'Olahraga',
                'short_desc' => 'Sepatu lari dengan bantalan empuk untuk kenyamanan maksimal',
                'is_active' => true
            ],
            [
                'name' => 'Sepatu Formal',
                'slug' => 'sepatu-formal',
                'price' => 699000,
                'sizes' => ['36', '37', '38', '39', '40', '41', '42'],
                'image' => 'sepatu-formal.jpg',
                'category' => 'Formal',
                'short_desc' => 'Sepatu formal elegan untuk acara resmi dan kerja',
                'is_active' => true
            ],
            [
                'name' => 'Sepatu Anak',
                'slug' => 'sepatu-anak',
                'price' => 299000,
                'sizes' => ['36', '37', '38', '39', '40', '41', '42'],
                'image' => 'sepatu-anak.jpg',
                'category' => 'Anak',
                'short_desc' => 'Sepatu anak dengan desain lucu dan bahan nyaman',
                'is_active' => true
            ],
            [
                'name' => 'Sepatu Basket',
                'slug' => 'sepatu-basket',
                'price' => 2799000,
                'sizes' => ['36', '37', '38', '39', '40', '41', '42'],
                'image' => 'sepatu-basket.jpg',
                'category' => 'Olahraga',
                'short_desc' => 'Sepatu basket profesional dengan dukungan ankle terbaik',
                'is_active' => true
            ],
            [
                'name' => 'Sepatu Nike',
                'slug' => 'sepatu-nike',
                'price' => 1999000,
                'sizes' => ['36', '37', '38', '39', '40', '41', '42'],
                'image' => 'sepatu-nike.jpg',
                'category' => 'Sneakers',
                'short_desc' => 'Sepatu Nike original dengan teknologi terkini',
                'is_active' => true
            ]
        ];

        foreach ($products as $product) {
            $product['sizes'] = json_encode($product['sizes']); // pastikan bentuk JSON string
            Product::updateOrCreate(
                ['slug' => $product['slug']],
                $product
            );
        }
    }
}
