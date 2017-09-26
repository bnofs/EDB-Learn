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
      <ul class="home-button">

        <li><a href="/">Home</a></li>

      </ul>

      <div class="main">

        <div class="flex-center position-ref half-height">

            <div class="content">

                <div class="title m-b-md">
                    Learn
                </div>

            </div>

        </div>
        <div class="row">
          <div class="box col-lg-10 col-lg-offset-1">
            <div class="col-lg-3" id="filter-box">
              <h2>Filters</h2>
              <hr />
              <form action="/filter.php" method="get">
                <input type="checkbox" name="food" > Food<br>
                <input type="checkbox" name="medicine" > Medicine<br>
                <input type="checkbox" name="medicine" > Materials<br>
                <input type="checkbox" name="medicine" > Customs<br>
                <input type="checkbox" name="medicine" > Technology<br>
                <input type="submit" value="Filter">
              </form>
            </div>

            <div class="col-lg-9" id="result-box">
              <h2>Results</h2>
              <hr />
            </div>
          </div>
        </div>


        </div>


</html>
