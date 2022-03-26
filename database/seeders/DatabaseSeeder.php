<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // CategoriesTableSeederファイルをシーディングの対象にする
        $this->call(CategoriesTableSeeder::class);        
        // AuthorsTableSeederファイルをシーディングの対象にする
        $this->call(AuthorsTableSeeder::class);
        // BooksTableSeederファイルをシーディングの対象にする
        $this->call(BooksTableSeeder::class);         // 追加
        // AuthorBookTableSeederファイルをシーディングの対象にする
        $this->call(AuthorBookTableSeeder::class);    // 追加
    }
}
