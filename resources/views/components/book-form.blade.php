<div>
  <div>
    <label for="category">カテゴリ</label>
    <select name="category_id" id="category">
      @foreach($categories as $category)
        <option 
          value="{{ $category->id }}"
          @if ($category->id == old('category_id', $book->category_id)) selected @endif
        >{{ $category->title }}</option>
      @endforeach
    </select>
  </div>
  <div>
    <label for="title">タイトル</label>
    <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}">  
  </div>
  <div>
    <label for="price">価格</label>
    <input type="text" id="price" name="price" value="{{ old('price', $book->price) }}">
  </div>
</div>