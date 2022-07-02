<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // 書籍一覧を取得
        $books = Book::all();
        
        // 書籍一覧をレスポンスとして返す
        return $books;
    }

    public function show($id)
    {
        // 書籍を1件取得
        $book = Book::findOrFail($id);

        // 取得した書籍をレスポンスとして返す
        return $book;
    }
}
