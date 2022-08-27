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
    <div>
      <label for="category">カテゴリ</label>
      <select name="category_id" id="category">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
      </select>
    </div>
    <div>
      <label for="title">タイトル</label>
      <input type="text" id="title" name="title">  
    </div>
    <div>
      <label for="price">価格</label>
      <input type="text" id="price" name="price">
    </div>
    <input type="submit" value="送信">
  </form>
</body>
</html>