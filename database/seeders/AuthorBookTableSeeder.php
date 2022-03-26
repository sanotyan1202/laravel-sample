<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Book;      // 追加

class AuthorBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Book取得
        $laravel_book = Book::find(1);
        $php_book = Book::find(2);
        $design_book = Book::find(3);

        // book_id=1,author_id=1のレコードをauthor_bookテーブルに登録
        // book_id=1,author_id=2のレコードをauthor_bookテーブルに登録
        $laravel_book->authors()->attach([1, 2]);
        // book_id=2,author_id=2のレコードをauthor_bookテーブルに登録（重複している場合は削除される）
        $php_book->authors()->sync([2]);
        // book_id=3,author_id=3のレコードをauthor_bookテーブルに登録（重複している場合は削除される）
        $design_book->authors()->sync([3]);        
    }
}
