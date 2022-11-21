<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publisherNames = ['Gramedia', 'Erlangga', 'Yudhistira', 'Mizan', 'Andi Publishers'];
        $publisherImages = ['gramedia-logo.png', 'erlangga-logo.jpg', 'yudhistira-logo.png', 'mizan-logo.jpg', 'andi-logo.jpg'];
        $faker=Faker::create('id_ID');
        for ($i=0; $i<5 ; $i++) {
            $publisher = new Publisher;
            $publisher->name = $publisherNames[$i];
            $publisher->address = $faker->address();
            $publisher->phone = $faker->phoneNumber();
            $publisher->email = $faker->email();
            $publisher->image = $publisherImages[$i];
            $publisher->save();
        }
    }
}
