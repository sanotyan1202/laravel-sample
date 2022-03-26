<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorDetail extends Model
{
    use HasFactory;

    // id以外を主キーにする場合は$primaryKeyフィールドを定義する
    protected $primaryKey = 'author_id';

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
