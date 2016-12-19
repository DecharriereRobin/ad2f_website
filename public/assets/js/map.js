var map;
var mapOptions = {
    zoom:14,
    center: {lat: 50.6178874, lng: 3.0352417000000287},
}// fin map option
// Initialisation de la carte
function initMap(){
    // latitude, longitude du siège sociale

    //var marker = '';

    // insertion de la map dans la div map
    map = new google.maps.Map(document.getElementById('map'), mapOptions );
    $.ajax({
        type: "GET",
        url: 'map/json',
        dataType: 'json',
        success: function(datas){
            //console.log(datas);
            for(key in datas){
                marker = new google.maps.Marker({
                    content: datas[key]['content'],
                    position: {lat: parseFloat(datas[key]['lat']), lng: parseFloat(datas[key]['lng'])},
                    map: map,
                    title: datas[key]['titre']
                });// fin marker

            }// fin for
        }// fin fonction datas

    });// fin ajax
} //fin fonction initmap

//$(document).ready(function(){

   $("#registeration_event").click(function(){

   });
//});// fin JQUERY

//function viewplace(){
//    map = new google.maps.Map(document.getElementById('map'), mapOptions );

//    $.ajax({
//        type: "GET",
//        url: 'map/json',
//        dataType: 'json',
//        success: function(datas){
            //console.log(datas);
            //for(key in datas){
            //    marker = new google.maps.Marker({
            //        content: datas[key]['content'],
            //        position: {lat: parseFloat(datas[key]['lat']), lng: parseFloat(datas[key]['lng'])},
            //        map: map,
            //        title: datas[key]['titre']
            ///    });// fin marker

            //}// fin for
        //}// fin fonction datas

    //});// fin ajax


    //var mapOptions = {
    //    zoom:14,
    //    center: {lat: 50.6178874, lng: 3.0352417000000287},
    //}// fin map option
//}



//function codeAddress() {
//     var address = $.ajax({
//        type: "Get",
//        url: '/front/map',
//        data: 'json',

//        });

        //var marker = new google.maps.Marker({
        //    map: map,
        //    position: results[0].geometry.location, // information  à recupérer
        //    title:"hello world" // information a récupérer
        //});
      //} else {
        //alert("Geocode was not successful for the following reason: " + status);
      //}
    //});
 // }
