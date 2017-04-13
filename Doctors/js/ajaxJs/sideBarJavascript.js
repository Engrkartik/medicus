function questionBarHide() {
    var userId = document.getElementById("userId").value;
    $.get("ajexCall/seeQuestion.php",
        {
            userId: userId
        }
    );
    $('#seeQuestionBar').hide();
    $("#answerSheet").slideUp();
    $("#seeAnswerSheet").slideUp();
    $("#newQuestion").slideDown();
}
/*$(document).ready(function(){
 $("#askQuestion").click(function(){
 var userId = document.getElementById("userId").value;
 $("#newQuestion").slideDown();
 $.get("ajexCall/seeQuestion.php",
 {
 userId: userId
 },
 $('#seeQuestionBar').hide();
 });
 });*/
function showAnswer() {
    //$('#answerBar').hide();
    $("#newQuestion").slideUp();
    $("#seeAnswerSheet").slideUp();
    $("#answerSheet").slideDown();
}
/*$(document).ready(function(){
 $("#askQuestion").click(function(){
 var userId = document.getElementById("userId").value;
 $("#newQuestion").slideDown();
 $.get("ajexCall/seeQuestion.php",
 {
 userId: userId
 },
 $('#seeQuestionBar').hide();
 });
 });*/
function seeQuestion() {
    //$('#answerBar').hide();
    $("#newQuestion").slideUp();
    $("#answerSheet").slideUp();
    $("#seeAnswerSheet").slideDown();
}