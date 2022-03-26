<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Book;      // 追加

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 追加　ここから
        // 登録するデータの準備
        $books = [
            [
                'title' => 'Laravel Book',
                'price' => 4000,
                'category_id' => 1    // programming
            ],
            [
                'title' => 'PHP Book',
                'price' => 3000,
                'category_id' => 1    // programming
            ],
            [
                'title' => 'Design Cook Book',
                'price' => 3500,
                'category_id' => 2    // design
            ],
        ];

        // 登録処理
        foreach($books as $book) {
            Book::create($book);
        }
        // 追加　ここまで
    }
}
