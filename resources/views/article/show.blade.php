@extends("layout/layout")

@section("content")

<style>

</style>

<div class="showA">
    <div class="container">
        <div class="panel panel-default pt-6rem">
            <table class="table table-striped table-hover text-center">
                <tr>
                    <th class="show-tail1">{{ $post -> title }}</th>
                </tr>
                <tr>
                    <td class="show-tail2">{{ $post -> body }}</td>
                </tr>
            </table>
        </div>


        <a href="/article/edit/{{$post->id}}"><div class="bt mt-3 gf-edit mainA-bt">edit</div></a>

    <form  method="post" action="/article/destroy/{{ $post->id }}" onSubmit="return Check()">
        {{ csrf_field() }}
        <input type="submit" value="delete" class="bt gf-destroy" id="btn-destroy" >
    </form>
    </div>
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