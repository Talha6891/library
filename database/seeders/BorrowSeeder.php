<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Borrow;
use App\Models\Student;

class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $studentIds = Student::pluck('id')->all();
        $bookIds = Book::pluck('id')->all();

        for ($i = 0; $i < 10; $i++) {
            Borrow::create([
                'student_id' => $faker->randomElement($studentIds),
                'book_id' => $faker->randomElement($bookIds),
                'issue_date' => $faker->date,
                'return_due_date' => $faker->date,
                'return_date' => $faker->date,
                'fine_amount' => $faker->randomFloat(2, 0, 100),
                'fine_status' => $faker->randomElement(['paid', 'pending', 'none']),
            ]);
        }
    }
}
