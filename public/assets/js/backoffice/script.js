

$(document).ready(function(){
    
    //$(".alert").addClass("in").fadeOut(4500);


/* swap open/close side menu icons */
$('[data-toggle=collapse]').click(function(){
 	$(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
    });

    
    /* Activation of Bootstrap Tooltip for administration tool */
    $('[data-toggle="tooltip"]').tooltip(); 
    
    /*------------------------------------------------------------
    
                        File Upload Modification

    -------------------------------------------------------------*/
    
    /* Preview Image Thumbnail */
   $("input[type=file]").on('change',function(e){
    var output = document.getElementById('thumbnail');
    thumbnail.src = URL.createObjectURL(event.target.files[0]);
    thumbnail.style = "";
    
    /* Display File Information */
    $('#upload-file-info').html($(this).val())
    });
    
       /*------------------------------------------------------------
    
             Datepicker Jquery UI for backoffice Form 

    -------------------------------------------------------------*/
    /* French initialisation for the jQuery UI date picker plugin. */
    /* Written by Keith Wood (kbwood{at}iinet.com.au),
			  Stéphane Nahmani (sholby@sholby.net),
			  Stéphane Raimbault <stephane.raimbault@gmail.com> */
    ( function( factory ) {
	   if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( [ "../widgets/datepicker" ], factory );
	} else {

		// Browser globals
		factory( jQuery.datepicker );
	}
    }( function( datepicker ) {

    datepicker.regional.fr = {
	closeText: "Fermer",
	prevText: "Précédent",
	nextText: "Suivant",
	currentText: "Aujourd'hui",
	monthNames: [ "janvier", "février", "mars", "avril", "mai", "juin",
		"juillet", "août", "septembre", "octobre", "novembre", "décembre" ],
	monthNamesShort: [ "janv.", "févr.", "mars", "avr.", "mai", "juin",
		"juil.", "août", "sept.", "oct.", "nov.", "déc." ],
	dayNames: [ "dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi" ],
	dayNamesShort: [ "dim.", "lun.", "mar.", "mer.", "jeu.", "ven.", "sam." ],
	dayNamesMin: [ "D","L","M","M","J","V","S" ],
	weekHeader: "Sem.",
	dateFormat: "dd/mm/yy",
	firstDay: 1,
	isRTL: false,
	showMonthAfterYear: false,
	yearSuffix: "" };
    datepicker.setDefaults( datepicker.regional.fr );

    return datepicker.regional.fr;

    } ) );
    
    $.datepicker.setDefaults($.datepicker.regional["fr"]); // Set to FR-fr
    $( "#datepicker" ).datepicker();
 
    
});
