<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Video'
        ]);
        Category::create([
            'name' => 'Audio'
        ]);
        Category::create([
            'name' => 'Fire'
        ]);
        Category::create([
            'name' => 'Accessories'
        ]);
        Category::create([
            'name' => 'Network'
        ]);
    }
}
