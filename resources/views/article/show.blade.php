@extends("layout/layout")

@section("content")

<style>
.mt-6{
    margin-top: 9rem;
}

.tail1{
    background-color: #badc58;
}

.tail2{
    background-color: #6ab04c;
}
</style>


<div class="container">
    <div class="panel panel-default mt-6">
            <table class="table table-striped table-hover m-3 text-center">
                <tr>
                <td class="tail1">{{ $post -> title }}</td>
            </tr>
            <tr>
                <td class="tail2">{{ $post -> body }}</td>
            </tr>
            </table>
    </div>


<a href="/article/edit/{{$post->id}}"><div class="btn btn-primary mt-3">編集</div></a>

<form  method="post" action="/article/destroy/{{ $post->id }}" onSubmit="return Check()">
    {{ csrf_field() }}
    <input type="submit" value="削除" class="btn btn-danger btn-destroy" id="btn-destroy" >
</form>
</div>


<script>
//     function Check() {
//         if(confirm("本当に削除しますか？")){
//             //削除
//             return true;
//         }else{
//             alert("削除を中止しました");
//             return false;
//         }
// }

</script>
</body>
</html>

@endsection