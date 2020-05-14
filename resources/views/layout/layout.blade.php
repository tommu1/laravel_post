<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel kensyuu</title>
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <link href="{{ asset('/sass/app.scss') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Geo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
</head>

<body>
        <nav class="navbar navbar-secondary bg-secondary">
                <div class="container">
                    <div class="navbar-header">
                        <a class="top2" href="/article">Poster</a>
                    </div>
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="navitem" href="/article/create">新規作成</a>
                                </li>
                            </ul>

                </div>
        </nav>


    @yield("content")
</body>
</html>