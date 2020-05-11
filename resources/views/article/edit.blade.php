@extends("layout/layout")

@section("content")

<style>
    .mt-6{
        margin-top: 10rem;
    }
</style>

<body>
    <div class="container mt-6">
    <h1 class="top">投稿掲示板</h1>
    <form method="post" action="/article/update/{{$post->id}}" >
    {{ csrf_field() }}
    
    <div class="form-group">
        <label for="name">タイトル</label>
        <input type="text" name="title" value="{{ $post->title }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="name">本文</label>
        <textarea name="body" value="{{ $post->body }}" class="form-control" autofocus rows="6"></textarea>
    </div>

    <input type="submit" class="btn btn-primary" value="更新">

    </form>
    </div>
</body>
</html>

@endsection