<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $categoryNames = ['Fantasy', 'Mystery', 'Horror', 'Fiction'];
        for ($i=0; $i<4 ; $i++) {
            $category = new Category;
            $category->name = $categoryNames[$i];
            $category->save();
        }
    }
}
