<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;    // 追加

class CategoriesTableSeeder extends Seeder
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
        $categories = [
            [ 'title' => 'programming' ],
            [ 'title' => 'design' ],
            [ 'title' => 'management' ]
        ];

        // 登録処理
        foreach($categories as $category) {
            Category::create($category);
        }
        // 追加　ここまで
    }
}