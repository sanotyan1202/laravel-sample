<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Message Sample</title>
</head>
<body>
  <h3>Messages</h3>
  <!-- 追加　ここから -->
  <div>
    <form action="/messages" method="post">
      @csrf
      <input type="text" name="body">
      <input type="submit" value="Send">
    </form>
  </div>
  <hr>
  <!-- 追加　ここまで -->
  <ul>
    @foreach ($messages as $message)
    <li>{{ $message->body }}</li>
    @endforeach
  </ul>
</body>
</html>