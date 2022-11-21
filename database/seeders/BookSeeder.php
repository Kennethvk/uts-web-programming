<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookTitles = ['A Great Book', 'Nice Title', 'Hello, Title', 'Book Book', 'Buku Kami', 'I Love Books', 'Life is Book', 'Final Book'];
        $bookImages = ['book-cover.png', 'book-cover2.jpg', 'book-cover3.jpg'];
        $faker=Faker::create('id_ID');
        for ($i=0; $i<8 ; $i++) {
            $book = new Book;
            $book->publisherId = $faker->numberBetween(1,5);
            $book->title = $bookTitles[$i];
            $book->author = $faker->name();
            $book->year = $faker->year();
            $book->synopsis = $faker->text();
            $book->image = $bookImages[$faker->numberBetween(0,2)];
            $book->save();
        }
    }
}
