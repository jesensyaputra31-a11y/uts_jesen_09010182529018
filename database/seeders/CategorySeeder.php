<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Fiksi', 'description' => 'Buku cerita fiktif dan novel'],
            ['name' => 'Non-Fiksi', 'description' => 'Buku pengetahuan dan biografi'],
            ['name' => 'Teknologi', 'description' => 'Buku pemrograman dan komputer'],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}