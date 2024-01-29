<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => "Home"
        ]);

        Category::create([
            'name' => "Work"
        ]);

        Category::create([
            'name' => "Collage"
        ]);
    }
}
