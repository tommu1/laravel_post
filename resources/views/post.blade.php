<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel kensyuu</title>
</head>
<body>
    <!-- <p>hello world</p> -->
    @foreach($posts as $value)
    <p>{{ $value -> title }}</p>
    <p>{{ $value -> body }}</p>
    @endforeach

</body>
</html>