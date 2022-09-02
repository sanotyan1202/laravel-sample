<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>書籍登録</title>
</head>
<body>
  <h1>書籍登録</h1>
  @if ($errors->any())
    <x-alert class="danger">
      <x-error-messages :errors="$errors" />
    </x-alert>
  @endif
  <form action="/books" method="post">
    @csrf
    <x-book-form :categories="$categories" :book="$book" />
    <input type="submit" value="送信">
  </form>
</body>
</html>