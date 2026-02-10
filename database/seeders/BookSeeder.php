<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'publisher_id' => 1,
            'book_name' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'published_date' => '1925-04-10',
            'price' => 1500,
        ]);

        Book::create([
            'publisher_id' => 2,
            'book_name' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'published_date' => '1960-07-11',
            'price' => 1800,
        ]);

        Book::create([
            'publisher_id' => 3,
            'book_name' => '1984',
            'author' => 'George Orwell',
            'published_date' => '1949-06-08',
            'price' => 2000,
        ]);

        Book::create([
            'publisher_id' => 4,
            'book_name' => 'Pride and Prejudice',
            'author' => 'Jane Austen',
            'published_date' => '1813-01-28',
            'price' => 1200,
        ]);

        Book::create([
            'publisher_id' => 5,
            'book_name' => 'The Catcher in the Rye',
            'author' => 'J.D. Salinger',
            'published_date' => '1951-07-16',
            'price' => 1700,
        ]);

        Book::create([
            'publisher_id' => 6,
            'book_name' => 'The Hobbit',
            'author' => 'J.R.R. Tolkien',
            'published_date' => '1937-09-21',
            'price' => 2200,
        ]);

        Book::create([
            'publisher_id' => 1,
            'book_name' => 'Fahrenheit 451',
            'author' => 'Ray Bradbury',
            'published_date' => '1953-10-19',
            'price' => 1600,
        ]);

        Book::create([
            'publisher_id' => 1,
            'book_name' => '吾輩は猫である',
            'author' => '夏目漱石',
            'published_date' => '1905-01-01',
            'price' => 1300,
        ]);

        Book::create([
            'publisher_id' => 1,
            'book_name' => 'こころ',
            'author' => '夏目漱石',
            'published_date' => '1914-01-01',
            'price' => 1400,
        ]);

        Book::create([
            'publisher_id' => 2,
            'book_name' => '銀河鉄道の夜',
            'author' => '宮沢賢治',
            'published_date' => '1934-01-01',
            'price' => 1200,
        ]);

        Book::create([
            'publisher_id' => 3,
            'book_name' => '走れメロス',
            'author' => '太宰治',
            'published_date' => '1940-01-01',
            'price' => 1100,
        ]);

        Book::create([
            'publisher_id' => 4,
            'book_name' => '雪国',
            'author' => '川端康成',
            'published_date' => '1947-01-01',
            'price' => 1500,
        ]);

    }
}
