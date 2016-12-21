$(function(){

//------------------------ Dropdown Menu EXTRA SMALL------------------------------//

	$('.title_nav_menu').on('click',function(){
        $('.dropdown_xs').toggle()

    });

//------------------------ Message after SendMail------------------------------//
	$("form").submit(function(){
	$("#success_message").css("display", "block");
});




}); //Close DOM
