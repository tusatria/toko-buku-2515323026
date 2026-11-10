<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data buku lama agar tidak duplikat
        Book::query()->delete();

        // Ambil kategori
        $action = Category::where('name', 'Action')->firstOrFail();
        $fantasy = Category::where('name', 'Fantasy')->firstOrFail();
        $romance = Category::where('name', 'Romance')->firstOrFail();

        // Kategori Action
        Book::create([
            'category_id' => $action->id,
            'title' => 'One Piece Vol. 1',
            'author_name' => 'Eiichiro Oda',
            'price' => 35000,
        ]);

        Book::create([
            'category_id' => $action->id,
            'title' => 'Naruto Vol. 1',
            'author_name' => 'Masashi Kishimoto',
            'price' => 32000,
        ]);

        Book::create([
            'category_id' => $action->id,
            'title' => 'Jujutsu Kaisen Vol. 1',
            'author_name' => 'Gege Akutami',
            'price' => 40000,
        ]);

        // Kategori Fantasy
        Book::create([
            'category_id' => $fantasy->id,
            'title' => 'Demon Slayer Vol. 1',
            'author_name' => 'Koyoharu Gotouge',
            'price' => 35000,
        ]);

        // Kategori Action
        Book::create([
            'category_id' => $action->id,
            'title' => 'Attack on Titan Vol. 1',
            'author_name' => 'Hajime Isayama',
            'price' => 38000,
        ]);

        Book::create([
            'category_id' => $action->id,
            'title' => 'Chainsaw Man Vol. 1',
            'author_name' => 'Tatsuki Fujimoto',
            'price' => 40000,
        ]);
    }
}
