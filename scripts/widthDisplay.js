/*
*	Display the Screen Width
*/

$("#dimensions .width").html($(window).width());

$(window).resize(function() {
  $("#dimensions .width").html($(window).width());
});