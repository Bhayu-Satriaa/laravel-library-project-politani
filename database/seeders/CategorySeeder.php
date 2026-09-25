<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            ['category_name' => 'Fiksi', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Non-Fiksi', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Referensi', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
