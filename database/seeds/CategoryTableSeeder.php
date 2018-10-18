<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['News', 'Opinion', 'Tutorial', 'Review'];

        foreach ($categories as $category)
        {
            Category::create(['name' => $category]);
        }
    }
}
