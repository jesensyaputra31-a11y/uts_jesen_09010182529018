<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['category_id' => 1, 'title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'publisher' => 'Bentang Pustaka', 'year' => 2005, 'stock' => 10],
            ['category_id' => 1, 'title' => 'Bumi Manusia', 'author' => 'Pramoedya Ananta Toer', 'publisher' => 'Hasta Mitra', 'year' => 1980, 'stock' => 8],
            ['category_id' => 2, 'title' => 'Habibie & Ainun', 'author' => 'BJ Habibie', 'publisher' => 'THC Mandiri', 'year' => 2010, 'stock' => 5],
            ['category_id' => 3, 'title' => 'Clean Code', 'author' => 'Robert C. Martin', 'publisher' => 'Prentice Hall', 'year' => 2008, 'stock' => 6],
            ['category_id' => 3, 'title' => 'Laravel Up & Running', 'author' => 'Matt Stauffer', 'publisher' => "O'Reilly", 'year' => 2019, 'stock' => 4],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}