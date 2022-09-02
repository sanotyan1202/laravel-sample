<table border="1">
  <tr>
    <th>カテゴリ</th>
    <th>書籍名</th>
    <th>価格</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach ($books as $book)
    <tr @if($loop->even) style="background-color:#E0E0E0" @endif>
      <td>{{ $book->category->title }}</td>
      <td><a href="/books/{{ $book->id }}">{{ $book->title }}</a></td>
      <td>{{ $book->price }}</td>
      <td><a href="/books/{{ $book->id }}/edit"><button>更新</button></a></td>
      <td>
        <form action="/books/{{ $book->id }}" method="post">
          @csrf
          <input type="hidden" name="_method" value="delete">
          <input type="submit" value="削除">
        </form>
      </td>
    </tr>
  @endforeach
</table>