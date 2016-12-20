
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

    var infowindow = new google.maps.InfoWindow({

  });

    function setEventMarker( marker, infowindow, texte){
            google.maps.event.addListener( marker, 'click', function() {
                // affectation du texte
                infowindow.setContent( texte);
                // affichage InfoWindow
                infowindow.open( this.getMap(), this);
            });
            }

    $.ajax({
        type: "GET",
        url: 'map/json',
        dataType: 'json',
        success: function(datas){
            console.log(datas);
            for(key in datas){
                //marker
                marker = new google.maps.Marker({
                    content: datas[key]['content'],
                    position: {lat: parseFloat(datas[key]['lat']), lng: parseFloat(datas[key]['lng'])},
                    map: map,
                    title: datas[key]['titre']
                });// fin marker

                // événement clicl sur le marker via une fonction externe
                setEventMarker( marker, infowindow, datas[key]['content']);

            }// fin for
        }// fin fonction datas
    });// fin ajax

} //fin fonction initmap

$(document).ready(function(){
   $(".centerMap").click(function(){
        // on centre sur le lieu, il faut recupérer la latitude et la longitude
        $('body').animate({scrollTop: $("#map").offset().top}, 'slow');
         var latlng =$(this).attr('name');
         console.log(latlng);
          map.setCenter($(this).attr('name'));

        });
});// fin JQUERY

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