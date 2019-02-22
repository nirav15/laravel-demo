<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'category_id' => random_int(1,7),
            'name' => str_random(10),
            'description' => str_random(10).'@gmail.com',
            'price' => random_int(1,100),
            'quantity' => random_int(1,10),
            'status' => true,
            'expireddate' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
