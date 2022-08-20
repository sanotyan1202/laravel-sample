<table border="1">
  <tr>
    <th>カテゴリ</th>
    <th>書籍名</th>
    <th>価格</th>
  </tr>
  @foreach ($books as $book)
    @if ($loop->even)
      <tr style="background-color:#E0E0E0" >
        <td>{{ $book->category->title }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->price }}</td>
      </tr>
    @else
      <tr>
        <td>{{ $book->category->title }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->price }}</td>
      </tr>
    @endif
  @endforeach
</table>