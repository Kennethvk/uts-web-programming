<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('id_ID');
        for ($i=1; $i<=8 ; $i++) {
            $book = new BookCategory;
            $book->bookId = $i;
            $book->categoryId = $faker->numberBetween(1,2);
            $book->save();
        }
        for ($i=1; $i<=8 ; $i++) {
            $book = new BookCategory;
            $book->bookId = $i;
            $book->categoryId = $faker->numberBetween(3,4);
            $book->save();
        }
    }
}
