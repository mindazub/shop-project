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
        Product::create([
            'name' => 'Product 1',
            'price' => rand(1,9999)/10,
            'description' => 'lorem ipsum upsala kekava',
            'category_id' => rand(1,5),
            'photo' => ''
        ]);

        Product::create([
            'name' => 'Product 2',
            'price' => rand(1,9999)/10,
            'description' => 'lorem ipsum upsala kekava',
            'category_id' => rand(1,5),
            'photo' => ''
        ]);

        Product::create([
            'name' => 'Product 3',
            'price' => rand(1,9999)/10,
            'description' => 'lorem ipsum upsala kekava',
            'category_id' => rand(1,5),
            'photo' => ''
        ]);

        Product::create([
            'name' => 'Product 4',
            'price' => rand(1,9999)/10,
            'description' => 'lorem ipsum upsala kekava',
            'category_id' => rand(1,5),
            'photo' => ''
        ]);

        Product::create([
            'name' => 'Product 5',
            'price' => rand(1,9999)/10,
            'description' => 'lorem ipsum upsala kekava',
            'category_id' => rand(1,5),
            'photo' => ''
        ]);

        Product::create([
            'name' => 'Product 6',
            'price' => rand(1,9999)/10,
            'description' => 'lorem ipsum upsala kekava',
            'category_id' => rand(1,5),
            'photo' => ''
        ]);

        Product::create([
            'name' => 'Product 7',
            'price' => rand(1,9999)/10,
            'description' => 'lorem ipsum upsala kekava',
            'category_id' => rand(1,5),
            'photo' => ''
        ]);

        Product::create([
            'name' => 'Product 8',
            'price' => rand(1,9999)/10,
            'description' => 'lorem ipsum upsala kekava',
            'category_id' => rand(1,5),
            'photo' => ''
        ]);


        Product::create([
            'name' => 'Product 9',
            'price' => rand(1,9999)/10,
            'description' => 'lorem ipsum upsala kekava',
            'category_id' => rand(1,5),
            'photo' => ''
        ]);

        Product::create([
            'name' => 'Product 10',
            'price' => rand(1,9999)/10,
            'description' => 'lorem ipsum upsala kekava',
            'category_id' => rand(1,5),
            'photo' => ''
        ]);

        Product::create([
            'name' => 'Product 11',
            'price' => rand(1,9999)/10,
            'description' => 'lorem ipsum upsala kekava',
            'category_id' => rand(1,5),
            'photo' => ''
        ]);

        Product::create([
            'name' => 'Product 12',
            'price' => rand(1,9999)/10,
            'description' => 'lorem ipsum upsala kekava',
            'category_id' => rand(1,5),
            'photo' => ''
        ]);
    }
}
