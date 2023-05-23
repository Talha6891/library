<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
       
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++)
        {
            Student::create([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'session' => $faker->randomElement(['Spring', 'Summer', 'Fall']),
                'semester' => $faker->randomNumber(),
                'roll_no' => $faker->unique()->randomNumber(5),
            ]);
        }
    }
}
