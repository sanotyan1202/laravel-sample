<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>書籍一覧</title>
</head>
<body>
  <h1>書籍一覧</h1>
  @if (session('info'))
    <x-alert class="info">
      <div style="color:blue">
        {{ session('info') }}
      </div>
    </x-alert>
  @endif
  <a href="/books/create">追加</a>
  <x-book-table :books="$books" />
</body>
</html>