@extends("layout/layout")

@section("content")

<body>
    <div class="mainA">
        <div class="container pb-5">
            <h2 class="pt-4 mb-3 gf top">Poster</h2>
            @foreach($posts as $value)
            <a href="/article/{{ $value -> id }}">
                <table class="table table-hover m-0">
                        <tr>
                            <th class="tail1">{{ $value -> title }}</th>
                        </tr>
                    
                {{-- <tr>
                    <td class="tail2"><a href="/article/{{ $value -> id }}">{{ $value -> body }}</a></td>
                <!-- <td><a href="{{ route('article.show', ['id' => $value->id ]) }}">{{ $value -> body }}</a></td> -->
                </tr> --}}
            </table>
        </a>
            @endforeach
            <a href="/article/create"><div class="bt mt-4 gf mainA-bt">create</div></a>

        </div>
        
    </div>
</body>
</html>

@endsection