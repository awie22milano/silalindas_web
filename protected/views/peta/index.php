<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-6.885225452897098,107.6137212663889),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("map"), propertiPeta);
  
  // membuat Marker
  var marker=new google.maps.Marker({
      position: new google.maps.LatLng(-6.885225452897098,107.6137212663889),
      map: peta,
      title: "Simpang Dago",
  });

}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<section class="content">
        
    <div class="col-md-12">
        <h3>Peta Clustering</h3>
        <div id="map" style="width: 100%; height: 300px;"></div>
    </div>
</section>