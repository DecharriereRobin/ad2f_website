var geocoder;
  var map;
  function initialize() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(50.61, 3.03);
    var mapOptions = {
      zoom:14,
      center: latlng
    }
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
  }

  function codeAddress() {
    //var address = document.getElementById("address").value;
    //var address = "1 rue du haut bourg 86440 migné-auxances";
    var address = $.ajax({
          type: "Get",
          url: 'PlaceController.php',
          data: 'address='+address,
          
         });
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        // marker
        // essai affichage marqueur via la base de donnée boucle



        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location, // information  à recupérer
            title:"hello world" // information a récupérer
        });
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
