$(document).ready(function(){

   $("#show_login").click(function(){
    showpopup();
   });
   $("#navigation,.main,.sidebar").click(function(){
    hidepopup();
   });

});


function showpopup()
{
   $("#loginform").fadeToggle();
   $("#loginform").css({"visibility":"visible","display":"block","position":"absolute"});
}
function hidepopup()
{
   $("#loginform").fadeOut();
   $("#loginform").css({"visibility":"hidden","display":"none"});
}




