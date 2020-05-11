require('./bootstrap');



$(function(){
    $(".btn-destroy").click(function(){
        if(window.confirm("本当に削除しますか？")){
            //そのままsubmit（削除）
        }else{
            //cancel
            return false;
        }
    });
});

console.log("hello");