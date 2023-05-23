<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++){

            Book::create([
                'title' => $faker->sentence,
                'author' => $faker->name,
                'ISBN' => $faker->isbn13,
                'publisher' => $faker->company,
                'publication_date' => $faker->date,
                'genre' => $faker->randomElement(['fiction','Non Fiction']),
                'availability' => $faker->randomElement(['available','unavailable']),
                // 'description' => $faker->paragraph(3),
                'cover_image' => $faker->imageUrl,
            ]);
    
        }   
    }
}
