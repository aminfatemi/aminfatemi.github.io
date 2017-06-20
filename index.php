
<!DOCTYPE html>
<html>
<?php
  $page_title = "Home – Amin's Website";
  $page_description = "Amin Fatemi - I am a web developer specialised in both frontend and backend web development. See 'my skills' and 'portfolio' to read more.";
  $Page_url = "www.aminfatemi.cf";
  ?>
  <?php include("inc/header.php"); ?>

  <body class="parent-home">
    <?php include("inc/sidenav.html"); ?>

    <div class="site-main">
      <div class="site-main-inner">
        <div class="home-section">
          <div class="home-section-inner">
            <div class="home-heading">
              Goedendag!<br>
              I'm Amin.
            </div>

            <h2 class="home-subheading">
              I am a developer knowledgable in both <br>
              <strong>frontend and backend web development</strong>.
            </h2>

            <div class="home-location" >
              Currently living in <br>
              <span class="location-name">
                <i class="fa fa-map-marker"></i>
                  Delft, Zuid-Holland, Netherlands
              </span>
            </div>
            <div id="map"></div>
             <script>
              function initMap(){               
                  var options = {
                    zoom:8,
                    center:{lat: 52.0208, lng: 4.4938}
                  }
                  var map = new google.maps.Map(document.getElementById('map'), options);
                  var marker = new google.maps.Marker({
                    position:{lat:52.0116 , lng:4.3571},
                    map:map,         
                  });      
                  var infoWindow = new google.maps.InfoWindow({
                    content:'<h1>Delft, NL</h1>'
                  });
                  marker.addListener('click',function(){
                      infoWindow.open(map,marker);
                  });
                }
             </script>
             
            <!--<div class="home-buttons aalign">
              <a href="portfolio.php" class="button button-outline button-white mybtn">Portfolio</a>
              <br>
              <a href="skills.php" class="button button-outline button-white">My Skills</a>
            </div>-->
          </div>
        </div>
      </div>
    </div>

    <?php include("inc/footer.html");?>

    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsFwvDR1A1nd_Lg6yDxbINL-GOCZBpxFw&callback=initMap">
    </script>

  </body>
</html>
