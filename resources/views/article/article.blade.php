@extends("layout/layout")

@section("content")

<body>
    <div class="mainA">
        <div class="container">
            <h2 class="mt-5 mb-3 gf">Poster</h2>
            @foreach($posts as $value)
            <table class="table table-striped table-hover m-0">
                <tr>
                    <th class="tail1">{{ $value -> title }}</th>
                </tr>

                <tr>
                    <td class="tail2"><a href="/article/{{ $value -> id }}">{{ $value -> body }}</a></td>
                <!-- <td><a href="{{ route('article.show', ['id' => $value->id ]) }}">{{ $value -> body }}</a></td> -->
                </tr>
            </table>
            @endforeach
        </div>
        <a href="/article/create"><div class="btn btn-primary mb-5">新規作成</div></a>
    </div>
</body>


</html>

@endsection