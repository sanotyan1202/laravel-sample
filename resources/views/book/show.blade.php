<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>書籍詳細</title>
</head>
<body>
  <h1>書籍詳細</h1>
  <ul>
    <li>ID：{{ $book->id }}</li>
    <li>カテゴリ：{{ $book->category->title }}</li>
    <li>タイトル：{{ $book->title }}</li>
    <li>価格：{{ $book->price }}</li>
  </ul>
  <a href="/books">戻る</a>
</body>
</html>