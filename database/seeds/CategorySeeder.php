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
            'name' => 'Alarms'
        ]);
        Category::create([
            'name' => 'Smart House'
        ]);
        Category::create([
            'name' => 'Network'
        ]);
    }
}
