<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel kensyuu</title>
    {{-- <script src="{{ asset('./js/app.js') }}" defer></script> --}}
</head>
    <style>
    body{
     
        box-sizing: border-box;
        font-size:30px;
        text-align:center;
    }

    .btn a{
        color:white;
    }

    a {
        color: black;
    }

    .tail1{
    background-color: #badc58;
}

.tail2{
    background-color: #6ab04c;
}

.validation{
    color: red;
}

    </style>

</head>

<body>

    @yield("content")

</body>
</html>