@extends("layout/layout")

@section("content")

<style>
.mt-6{
    margin-top: 10rem;
}
</style>

<body>

        @error("title")
        <p class="validation">{{ $message }}</p>
        @enderror
        @error("body")
        <p class="validation">{{ $message }}</p>
        @enderror
        <div class="container mt-6 ">
                <h1 class="top text-center">投稿掲示板</h1>
                <form method="post" action="/article/store" >
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="name">タイトル</label>
                    <input type="text" name="title" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="name">本文</label>
                    <textarea name="body" class="form-control" rows="6"></textarea>
                </div>

    <input type="submit" value="送信" class="btn btn-primary">

    </form>
    </div>
</body>
</html>

@endsection