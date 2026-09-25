<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('book')->insert([
            [
                'category_id' => 1,
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'stock' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'title' => 'Sapiens',
                'author' => 'Yuval Noah Harari',
                'stock' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
