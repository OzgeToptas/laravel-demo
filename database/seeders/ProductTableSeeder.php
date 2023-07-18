<?php

namespace Database\Seeders;

use App\Models\CustomerProduct;
use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Products::truncate();
        for ($i=0; $i < 200; $i++) {
            $product = Products::create([
                "name"    => fake()->sentence(2),
                "type"    => Null,
            ]);
            CustomerProduct::create([
                "customer_id"   => rand(1,50),
                "product_id"    => $product->id
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
