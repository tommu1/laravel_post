<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel kensyuu</title>
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Geo&display=swap" rel="stylesheet">
</head>

<body>
    @yield("content")
</body>
</html>