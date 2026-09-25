<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loan')->insert([
            [
                'book_id' => 1,
                'student_id' => 'H253600468',
                'loan_date' => now()->subDays(5),
                'return_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'book_id' => 2,
                'student_id' => 'H253600470',
                'loan_date' => now()->subDays(2),
                'return_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
