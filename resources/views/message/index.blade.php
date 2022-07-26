<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Message Sample</title>
</head>
<body>
  <h3>Messages</h3>
  <div>
    <form action="/messages" method="post">
      @csrf
      <input type="text" name="body">
      <input type="submit" value="Send">
    </form>
  </div>
  <hr>
  <ul>
    @foreach ($messages as $message)
    <li>{{ $message->body }}</li>
    @endforeach
  </ul>
</body>
</html>