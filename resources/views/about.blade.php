<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>About us</title>
</head>
<body>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->id }}{{ $book->title }}</li>
        @endforeach
    </ul>
</body>
</html>
