<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
.container{
    width:300px;
    margin: 300px auto;

}
</style>

<body>
    <div class="container">
    <h1 class="top">投稿掲示板</h1>
    <form action="{{url('/index')}}" method="post">
    
    <p>
タイトル：<input type ="text" name="content" rows="4" cols="40"></textarea>
    </p>

    <p>
本文：<textarea name="content" rows="4" cols="40"></textarea>
    </p>


    <input type="submit" value="送信">

    </form>
    </div>
</body>
</html>