@extends("layout/layout")

@section("content")

<style>
    .mt-6{
        margin-top: 10rem;
    }
</style>

<body>
    <div class="crep">
        <div class="container">
                <h1 class="top text-center gf">Poster</h1>
        <form method="post" action="/article/update/{{$post->id}}" >
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="name" class="color-w gf">TITLE</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control input">
        </div>

        <div class="form-group">
                <label for="name" class="color-w gf">MAIN</label>
            <textarea name="body" value="{{ $post->body }}" class="form-control input" rows="6"></textarea>
        </div>

        <input type="submit" class="bt gf" value="Upgrade">

        </form>
        </div>
    </div>
</body>
</html>

@endsection