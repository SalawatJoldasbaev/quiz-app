<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(
            [
                UserSeeder::class,
                CategorySeeder::class,
                CollectionSeeder::class,
                QuestionSeeder::class,
            ]
        );
    }
}