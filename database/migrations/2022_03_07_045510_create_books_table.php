<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->index();            // title列でインデックスを作成
            $table->string('author', 50);
            $table->integer('price');                         // priceという名前でint型のカラムを定義
            $table->foreignId('category_id')->constrained();  // category_id'という名前でbigint型, foreign key制約のカラムを定義
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
