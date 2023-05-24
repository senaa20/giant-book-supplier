<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Book;
use App\Models\Category;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $publisher = DB::table('publishers')->pluck('id');
        //gunanya untuk ngerandom siapa publisher yang ngepublish bukunya (sesuai id yang ada di tabel publisher)

        for($i=0;$i<=14;$i++){
            $book = Book::create([
                'publisher_id' => $faker->randomElement($publisher),
                'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
                'author' => $faker->name,
                'year' => $faker->year($max = 2023),
                'image' =>  '/assets/cover/'.mt_rand(1,15).'.png',
                'synopsis' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
            ]);

            $categories = Category::inRandomOrder()->limit(rand(1, 4))->get();
            $book->categories()->attach($categories);

        }

    }
}
