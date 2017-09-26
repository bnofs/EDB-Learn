<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ethnobotanical Database</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">        <!-- Styles -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    </head>
    <body>
      <div id="home">
      </div>
      <ul class="navbar">
        <li class="active navitem"><a href="/">Home</a></li>
        <li class="navitem"><a href="/learn">Food</a></li>
        <li class="navitem"><a href="/learn">Medicine</a></li>
        <li class="navitem"><a href="/learn">Materials</a></li>
        <li class="navitem"><a href="/learn">Customs</a></li>
        <li class="navitem"><a href="/learn">Technology</a></li>

      </ul>
      <div class="main">

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <img id="logo" src="/img/tree.jpeg" />
                <div class="title m-b-md">
                    Ethnobotanical Database
                </div>
                <div class="links">
                    <a href="#explore">Explore</a>
                    <a href="/learn">Learn</a>
                    <a id="searchButton">
                      <i class="fa fa-search"></i> Search
                    </a>
                </div>
            </div>
        </div>

        <div id="searchBox" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <i class="fa fa-search" aria-hidden="true"></i>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Database...">


          </div>

        </div>

      </div>

        <div class="main" id="explore">
          <h2>Explore</h2>
        </br/>
          <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <h3>FOOD</h3>
                <div class="col-lg-6">
                  Wild Potato
                  <img src="img/potatoes.jpg" />
                </div>
                <div class="col-lg-6">
                  Onions
                  <img src="img/onions.jpg" />
                </div>
            </div>

            <div class="col-lg-4 vertical-line">
                <h3>MEDICINE</h3>
                <div class="col-lg-6">
                  Reed
                  <img src="img/reeds.jpeg" />
                </div>
                <div class="col-lg-6">
                  Fern
                  <img src="img/fern.jpg" />
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-lg-offset-2 horiz-line">
                <h3>TECHNOLOGY</h3>
                <div class="col-lg-6">
                  Aquatic Grass
                  <img src="img/aquatic-grass.jpeg" />
                </div>
                <div class="col-lg-6">
                  Dogbane Hemp
                  <img src="img/dogbane-hemp.jpeg" />
                </div>
            </div>

            <div class="col-lg-4 vertical-line horiz-line">
                <h3>CUSTOMS</h3>
                <div class="col-lg-6">
                  Red Osier Dogwood
                  <img src="img/red-osier-dogwood.jpg" />
                </div>
                <div class="col-lg-6">
                  Bull Thistle
                  <img src="img/bull-thistle.jpeg" />
                </div>
            </div>
          </div>

        </div>

    </body>
    <script>
    // Get the modal
    var modal = document.getElementById('searchBox');

    // Get the button that opens the modal
    var btn = document.getElementById("searchButton");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 1000, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
    </script>
</html>
