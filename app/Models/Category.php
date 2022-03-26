<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // title列の登録を許可する（ホワイトリスト）
    protected $fillable = ['title'];

    // 登録拒否する列を定義する（ブラックリスト）
    // protected $guarded = ['id', 'created_at', 'updated_at'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}