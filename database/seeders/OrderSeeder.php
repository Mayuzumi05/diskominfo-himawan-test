<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product1 = Product::create([
            'id' => 1,
            'name' => 'Laptop X',
            'price' => 12000000,
            'stock' => 15,
            'sold' => 0
        ]);

        $product2 = Product::create([
            'id' => 2,
            'name' => 'Smartphone Y',
            'price' => 7000000,
            'stock' => 50,
            'sold' => 0
        ]);

        $product3 = Product::create([
            'id' => 3,
            'name' => 'Headset Z',
            'price' => 350000,
            'stock' => 50,
            'sold' => 0
        ]);
    }
}
