
<<<<<<< HEAD
$(document).ready(function(){
    
    $(".alert").addClass("in").fadeOut(4500);

/* swap open/close side menu icons */
    $('[data-toggle=collapse]').click(function(){
  	// toggle icon
  	$(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
    });
    
    
=======
$(document).ready(function(){$(".alert").addClass("in").fadeOut(4500);

/* swap open/close side menu icons */
$('[data-toggle=collapse]').click(function(){
  	// toggle icon
  	$(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
    });
>>>>>>> 48bc55b28745d2069a27cc8b5cc60cb7d0fcc92f
});

/* Activation of Bootstrap Tooltip for administration tool */

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});