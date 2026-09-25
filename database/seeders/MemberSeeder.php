<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('member')->insert([
            [
                'student_id' => 'H253600468',
                'name' => 'Risti',
                'address' => 'Jl. Rw. Indah',
                'phone_numbers' => '085827686214',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => 'H253600470',
                'name' => 'I Dewa Gede Krisna Putra',
                'address' => 'Jl. Kerta Buana',
                'phone_numbers' => '081353929518',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
