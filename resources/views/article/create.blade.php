@extends("layout/layout")

@section("content")

<body>
    <div class="crep">
        
        <div class="container form-p">
            <h1 class="top text-center gf">Poster</h1>
            <form method="post" action="/article/store" >
                {{ csrf_field() }}
                
                @error("title")
                <p class="validation">{{ $message }}</p>
                @enderror
                    <div class="form-group">
                        <label for="name" class="color-w gf">TITLE</label>
                        <input type="text" name="title" class="form-control input">
                    </div>
                    @error("body")
                    <p class="validation">{{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <label for="name" class="color-w gf">MAIN</label>
                        <textarea name="body" class="form-control input" rows="6"></textarea>
                    </div>

                <input type="submit" value="Submit" class="gf bt">
            </form>
        </div>
    </div>
</body>
</html>

@endsection