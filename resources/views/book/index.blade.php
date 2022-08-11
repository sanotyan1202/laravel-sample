<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>書籍一覧</title>
</head>
<body>
  <h1>書籍一覧</h1>
  @if (session('info'))
    <div style="color:blue">
      {{session('info')}}
    </div>
  @endif
  <a href="/books/create">追加</a>
  <table border="1">
    <tr>
      <th>カテゴリ</th>
      <th>書籍名</th>
      <th>価格</th>
    </tr>
    @foreach ($books as $book)
      @if ($loop->even)
        <tr style="background-color:#E0E0E0">
          <td>{{$book->category->title}}</td>
          <td>{{$book->title}}</td>
          <td>{{$book->price}}</td>
        </tr>
      @else
        <tr>
          <td>{{$book->category->title}}</td>
          <td>{{$book->title}}</td>
          <td>{{$book->price}}</td>
        </tr>
      @endif
    @endforeach
  </table>
</body>
</html>