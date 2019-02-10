<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models;

class ProductsTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        for ($i=0; $i < 50; $i++) {
            DB::table('products')->insert([
                'title' => str_random(10)
            ]);
        }
    }
}
