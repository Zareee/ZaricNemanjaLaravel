@extends ('layouts.master')
@section('content')
    <style>
      #map {
        height: 400px;
        width: 100%;
        margin-top: 20px;
        border-style: double;
        border-width: 3px;
       }
    </style>
        <script>
      function initMap() {
        var uluru = {lat: 44.782514, lng: 20.471086};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRvfnUV3yQ5X_KIi1w7SwgIluzr4L9gSs&callback=initMap"></script>
 
 <div class="container">   
<div class="row">
  <div class="col-xl mt-5">

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Galerija Slika</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">-</th>
      <td>Ime :</td>
      <td>Atelje CvetkoVV</td>
    </tr>
    <tr>
      <th scope="row">-</th>
      <td>Adresa :</td>
      <td>Vojvode Stepe, Beograd</td>
    </tr>
    <tr>
      <th scope="row">-</th>
      <td>Telefon :</td>
      <td>+381652555992</td>
    </tr>
    <tr>
      <th scope="row">-</th>
      <td>Email :</td>
      <td>natalija.cvetkov@gmail.com</td>
    </tr>
  </tbody>
</table>
<hr>
  <h4>Cvetkov Vesna</h4>
  <div class="row">
  <p>Autoportret, 1984.</p>

    <img class="d-block img-fluid pr-2 pl-4" style="max-width:200px; float:left;" src="/storage/images/portret.jpg">
  <p class="text-justify"> Rodjena 1965, u Zrenjaninu. Autodidakta, ima status slobodnog umetnika. 
 Član udruženja slikara ULAZ iz Zrenjanina od 2010. a predsednica udruzenja od 2012 godine.
 Ucestvovala  na vise kolektivnih izlozbi i kolonija. Od 2007.
 radi u okviru svoje galerije.
 Od 2011. do danas stvara u svom ateljeu u Zrenjaninu. </p>


  <h5>Medju prvim radovima. Lavirani tuš, 1981.</h5>
  </div>
  <div class="row">
  <div class="col-4 mr-5">
    <img class="d-block img-fluid img-thumbnail" style="max-width:250px;" src="/storage/images/slika1.jpg">
  </div>
  <div class="col-4 pl-4">
    <img class="d-block img-fluid img-thumbnail" style="max-width:200px;" src="/storage/images/slika2.jpg">
  </div>
  <div class="col-4">
    <img class="d-block img-fluid img-thumbnail" style="max-width:200px;" src="/storage/images/slika3.jpg">
  </div>

 </div>

  </div>

  <div class="col-xl pt-5 pb-10" style="max-width: 600px; max-height:400px;" border="5">

    <div id="map"></div>

  </div> 
</div>
</div> 
@endsection