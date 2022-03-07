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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();                   // 'id'という名前でbigint型, auto_incrementのカラムを定義
            $table->string('title', 100);   // 'title'という名前でvarchar(100)型のカラムを定義
            $table->timestamps();           // 'created_at'と'updated_at'という名前でtimestamp型のカラムを定義
        });
    }
        
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
