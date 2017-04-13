function submitAnswer(id) {
    var ans = document.getElementById("ans"+id).value;
    if(ans==''){
        alert("Please Submit Your Answer");
    }else{
        $.get("ajexCall/submitAnswer.php",
            {
                q_id: id,
                ans: ans
            },
            function(result){
                //alert(result);
                $("#result"+id).html(result);
                setTimeout(function(){
                    $("#result"+id).fadeOut();
                }, 1000);
            });
        $('#table1 .'+id).hide();
    }
}
function hide(id) {
    $.get("ajexCall/answerLater.php",
        {
            q_id: id
        },
        function(result){
            //alert(result);
            $("#result"+id).html(result);
            setTimeout(function(){
                $("#result"+id).fadeOut();
            }, 1000);
        });
    $('#table1 .'+id).hide();
}
function seeSubmitAnswer(id) {
    var ans = document.getElementById("ans"+id).value;
    if(ans==''){
        alert("Please Submit Your Answer");
    }else{
        $.get("ajexCall/submitAnswer.php",
            {
                q_id: id,
                ans: ans
            },
            function(result){
                //alert(result);
                $("#result"+id).html(result);
                setTimeout(function(){
                    $("#result"+id).fadeOut();
                }, 1000);
            });
        $('#table3 .'+id).hide();
    }
}