function initMap() {
  var uluru = {
    lat: 48.914563 ,
    lng: 2.354688
  };
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}
