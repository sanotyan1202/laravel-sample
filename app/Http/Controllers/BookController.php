<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookPostRequest;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        // 書籍一覧を取得
        $books = Book::with('category')
                 ->orderBy('category_id')
                 ->orderBy('title')
                 ->get();
        
        // 書籍一覧をレスポンスとして返す
        return response()->view('book/index', ['books' => $books])
                         ->header('Content-Type', 'text/html')
                         ->header('Content-Encoding', 'UTF-8');
}

    public function show($id)
    {
        // 書籍を1件取得
        $book = Book::findOrFail($id);

        // 取得した書籍をレスポンスとして返す
        return $book;
    }

    public function create()
    {
        // Viewでカテゴリ一覧を表示するために全権取得
        $categories = Category::all();

        // "book/create.blade.php" Viewの呼び出し
        // categoriesという名前でカテゴリ一覧をViewに渡す
        return view('book/create', ['categories' => $categories]);
    }

    public function store(BookPostRequest $request)
    {
        // 書籍データ登録用のオブジェクトを作成する
        $book = new Book();

        // リクエストオブジェクトからパラメータ（入力情報）を取得し、bookオブジェクトに格納する
        $book->category_id = $request->category_id;  // 選択されたカテゴリのID
        $book->title = $request->title;              // 入力された書籍名
        $book->price = $request->price;              // 入力された価格

        // 保存
        $book->save();

        // 登録完了後 'books/'にリダイレクトする
        return redirect('books')->with('info', $book->title . 'を追加しました。');
    }
}
    