<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 15; $i++)
        {
            $p = $i + 1;
            Product::create([
                'name' => 'Product ' . $p,
                'price' => rand(1,9999)/10,
                'description' => 'lorem ipsum epsilon quorum',
                'category_id' => rand(1,5),
                'photo' => 'default/700x400.jpg'
            ]);
        }
    }
}
