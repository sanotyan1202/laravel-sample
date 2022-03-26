<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Author;
use App\Models\AuthorDetail;
use Faker\Factory;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ファクトリによって5件の著者情報を作成
        Author::factory(5)->create();

        // 著者に紐づく詳細情報を登録する
        $authors = Author::all();
        $faker = Factory::create();
        foreach ($authors as $author) {
            AuthorDetail::create([
                'author_id' => $author->id,
                'email' => $faker->safeEmail,
                'address' => $faker->address
            ]);
        }
    }
}
