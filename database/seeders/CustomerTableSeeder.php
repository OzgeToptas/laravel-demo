<?php

namespace Database\Seeders;

use App\Models\Customers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Customers::truncate();
        for ($i=0; $i < 50; $i++) {
            Customers::create([
                "first_name"    => fake()->name(),
                "last_name"     => fake()->lastName(),
                "email_address" => fake()->email()
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
