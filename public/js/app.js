
function Check() {
    if(confirm("本当に削除しますか？")){
        //削除
        return true;
    }else{
        alert("削除を中止しました");
        return false;
    }
}