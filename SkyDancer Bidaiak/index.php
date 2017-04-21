<?php
session_start();
 ?>
<html lang="en">
<head>
  <title>Skydancer Bidaiak</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
    overflow: scroll;
    font: 400 15px/1.8 "Courier New", Courier, monospace;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;
    font-size: 20px;
    color: #111;
  }
  .nav.navbar-nav.navbar-center{
    width: 50%;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(0%);
    filter: grayscale(0%); /* make all photos black and white */
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: rgba(138, 138, 138, 0.96);
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: rgb(0, 208, 245);
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: rgba(138, 138, 138, 0.96);
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: rgb(142, 142, 142);
    color: rgb(0, 208, 245) !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
    #map {
          height: 400px;
          width: 100%;
         }
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: rgba(138, 138, 138, 0.96);
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
    color: rgb(0, 102, 255) !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: rgba(138, 138, 138, 0.96) !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: rgba(138, 138, 138, 0.96);
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  .logintable td{
    background-color: rgba(138, 138, 138, 0.96);
    color: white;
    font: 400 11px/1.8 "Courier New", Courier, monospace;
  }
  .logininput{
    color: black;
    font: 400 11px/1.8 "Courier New", Courier, monospace;
  }
  </style>
</head>
<body id="hasiera" data-spy="scroll" data-target=".navbar" data-offset="50">
 <?php
  if (isset($_GET["login"]) && $_GET["login"]==0) {
    echo "<script type='text/javascript'>alert(\"Zeure Id zenbakia edo pasahitza gaizki dago.\");</script>";
  }
  ?>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-center">
          <li><a href="#hasiera">Hasiera</a></li>
          <li><a href="#bidaiak">Bidaiak</a></li>
          <li><a href="#erreserbak">Erreserbak</a></li>
          <li><a href="#kontaktua">Kontaktua</a></li>
          <?php
            if (isset($_SESSION["loged"])) {
              echo "<li style=\"position: absolute; right: 0;\"><a href=\"#usermenu\" data-toggle=\"collapse\">Kaixo ".$_SESSION["name"]."!</a></li>";

            }else {
             echo "<li style=\"position: absolute; right: 0;\"><a href=\"#login\" data-toggle=\"collapse\">Login</a></li>";
            }

           ?>
          <div id="login" class="collapse" style="position: absolute; right: 0;">
            <form  action="php/login.php" method="post">
              <table class="logintable">
                <tr>
                  <td>Zure ID zenbakia::</td><td><input type="text" name="userid" class="logininput"></td>
                </tr>
                <tr>
                  <td>Pasahitza: </td> <td><input type="password" name="passwd" class="logininput"></td>
                </tr>
              </table>
              <input type="submit" name="login" value="Saioa hasi">
            </form>
          </div>
          <div id="usermenu" class="collapse" style="position: absolute; right: 0;">
            <form  action="php/logout.php" method="post">
              <table class="logintable">
                <tr>
                  <td>awdawd ID:</td><td><input type="text" name="userid" class="logininput"></td>
                </tr>
                <tr>
                  <td>qwrw: </td> <td><input type="password" name="passwd" class="logininput"></td>
                </tr>
              </table>
              <a href="php/logout.php"></a><input type="submit" name="logout" value="Saioa itxi">
            </form>
          </div>
        </ul>
      </div>
    </div>
  </nav>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/finlandia.jpg" alt="Finlandia" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Finlandia</h3>
        </div>
      </div>

      <div class="item">
        <img src="img/china.jpg" alt="China" width="1200" height="700">
        <div class="carousel-caption">
          <h3>China</h3>
        </div>
      </div>

      <div class="item">
        <img src="img/tailandia.jpg" alt="Tailandia" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Tailandia</h3>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Container  -->
  <div id="bidaiak" class="container text-center">
    <h3>SkyDancer Bidaiak</h3>
    <p><em>Edozein leku, edoizen momentuan.</em></p>
    <p>1990-an sortua, gure empresa egunero handiagoa egiten da zu bezalako pertsonekin, konfiatzen duten pertsonekin. Beti sahiatzen gara prezio merkeenak eta erosotasun guztiekin lan egiten.</p>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <p class="text-center"><strong>Hegazkinak</strong></p><br>
        <a href="#demo" data-toggle="collapse">
          <img src="img/avion.png" class="img-circle person" alt="Random Name" style="height: 255px; width:255px;">
        </a>
        <div id="demo" class="collapse">
          <p>Gure egazkinak </p>
          <p>azken modelokoak</p>
          <p>dira.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <p class="text-center"><strong>Denda fisikoak</strong></p><br>
        <a href="#demo2" data-toggle="collapse">
          <img src="img/mapa.gif" class="img-circle person" alt="Random Name" width="255" height="255" style="
    height: 255px;">
        </a>
        <div id="demo2" class="collapse">
          <p>Espainiako hiri</p>
          <p>guztietan denda</p>
          <p>fisikoak ditugu.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <p class="text-center"><strong>Prezioa</strong></p><br>
        <a href="#demo3" data-toggle="collapse">
          <img src="img/precio.jpg" class="img-circle person" alt="Random Name" width="255" height="255" style="
    height: 255px;">
        </a>
        <div id="demo3" class="collapse">
          <p>Merkatuko prezio</p>
          <p>merkeenak ditugu,</p>
          <p>benetan ;)</p>
        </div>
      </div>
    </div>
  </div>



  <!-- Container (TOUR Section) -->
  <div id="erreserbak" class="bg-1">
    <div class="container">

      <h3 class="text-center">ERRESERBAK</h3>
      <p class="text-center">Hilabetero deskontu berriak.<br> Hemen daude hilabete honetakoak:<br>(Data noiztik-nora dauden salgai)</p>
      <div class="panel-group" id="accordion">

      </div>
      <ul class="list-group">
        <li class="list-group-item">Madrid/Barcelona - Francia <span class="badge">75% merkeago!</span></li>
        <li class="list-group-item">Espainia (edonon) - Jamaica<span class="badge">55% merkeago!</span></li>
        <li class="list-group-item disabled">Madrid - Estatu batuak (edonon)<span class="badge ">85% merkeago!</span><span class="label label-danger">Agortutak</span></li>
      </ul>

      <div class="row text-center">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img\paris.jpg" alt="Paris" width="400" height="300">
            <p><strong>Paris</strong></p>
            <p>12/6/2017 - 30/8/2017</p>
            <button class="btn" data-toggle="modal" data-target="#myModal">Tiketa erosi</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img\jamaica.jpg" alt="Paris" width="400" height="300">
            <p><strong>Jamaica</strong></p>
            <p>4/3/2017 - 25/6/2017</p>
            <button class="btn" data-toggle="modal" data-target="#myModal">Tiketa erosi</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img\washington.jpg" alt="Paris" width="400" height="300">
            <p><strong>Washington</strong></p>
            <p>1/9/2017 - 15/9/2017</p>
            <button class="btn" data-toggle="modal" data-target="#myModal">Tiketa erosi</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img\bangkok.jpg" alt="Paris" width="400" height="300">
            <p><strong>Bangkok</strong></p>
            <p>17/4/2017 - 1/8/2017</p>
            <button class="btn" data-toggle="modal" data-target="#myModal">Tiketa erosi</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img\moscu.jpg" alt="New York" width="400" height="300">
            <p><strong>Moscú</strong></p>
            <p>20/11/2017 - 30/2/2018</p>
            <button class="btn" data-toggle="modal" data-target="#myModal">Tiketa erosi</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img\hogwarts.jpg" alt="San Francisco" width="400" height="300">
            <p><strong>Hogwarts</strong></p>
            <p>5/7/2017 - 5/8/2017</p>
            <button class="btn" data-toggle="modal" data-target="#myModal">Tiketa erosi</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4><span class="glyphicon glyphicon-lock"></span> Tiketak</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Hiru baino gehiago 7% merkeago</label>
                <input type="number" class="form-control" id="psw" placeholder="Zenbat nahi dituzu?">
              </div>
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Bidali hona:</label>
                <input type="text" class="form-control" id="usrname" placeholder="Sartu zure e-maila">
              </div>
              <button type="submit" class="btn btn-block" data-toggle="modal" data-target="#myModal2">Ordaindu
                <span class="glyphicon glyphicon-ok"></span>
              </button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              <span class="glyphicon glyphicon-remove"></span> Utzi
            </button>
            <p>Laguntza <a href="#">bila?</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Eskerrik asko!</h4>
        </div>
        <div class="modal-body">
          <p>Zure e-mailera bidali dizugu ordainketa egiteko datuak</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Utzi</button>
        </div>
      </div>

    </div>
  </div>

  <!-- Container (Contact Section) -->
  <div id="kontaktua" class="container">
    <h3 class="text-center">Kontaktua</h3>
    <p class="text-center"><em>Galderarik?</em></p>

    <div class="row">
      <div class="col-md-4">
        <p><span class="glyphicon glyphicon-map-marker"></span>Arrasate, Gipuzkoa</p>
        <p><span class="glyphicon glyphicon-phone"></span>Tlf: +34 943 579 120</p>
        <p><span class="glyphicon glyphicon-envelope"></span>Email: Skydancerbidaiak@gmail.com</p>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Izena" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Komentarioa" rows="5"></textarea>
        <br>
        <div class="row">
          <div class="col-md-12 form-group">
            <button class="btn pull-right" type="submit">Bidali</button>
          </div>
        </div>
      </div>
    </div>
    <br>


    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaJvQs2eeO3sgmPxLGxl9IwusU5T9TzFk&callback=initMap">
    </script>

    <!-- Footer -->
    <footer class="text-center">
      <a class="up-arrow" href="#hasiera" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a><br><br>
      <p>SkyDancer© bidaiak</a></p>
    </footer>

    <script>
    $(document).ready(function(){
      // Initialize Tooltip
      $('[data-toggle="tooltip"]').tooltip();

      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#hasiera']").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {

          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    })
    </script>

  </body>
  </html>
