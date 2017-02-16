
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Weather Scraper</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    
  </head>

  <body>
  <div class="container">
  	<div class="row">
  		<div class="col-md-6 col-md-offset-3">
  			<h1 class="center white">Weather Predictor</h1>
        <p class="lead center white">Enter your city below to get a forecast for the weather.</p>
        <form class="center">
          <div class="form-group center">
            <input type="text" class="form-control" name="city" id="city" placeholder="Eg. Delhi, Mumbai, Banglore">
          </div>
          <button type="submit" class="btn btn-success btn-lg" id="findMyWeather">Find my Weather</button>
        </form>
        <div id="success" class="alert alert-success center" style="margin-top: 20px;display: none;">fnkdls</div>
        <div id="fail" class="alert alert-danger center" style="margin-top: 20px;display: none;">Could not find weather data for that city. Please try again! </div>
        <div id="noCity" class="alert alert-danger center" style="margin-top: 20px;display: none;">Please enter a city! </div>
      </div>
    </div>

  </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 
    <script src="js/bootstrap.js"></script>
    <script>
      $("#findMyWeather").click(function (event) {
        event.preventDefault();
        if ($("#city").val()!="") {
          $.get("scraper.php?city="+$("#city").val(), function (data) {
              if (data == "") {
                $("#success").hide();
                $("#noCity").hide();
                $("#fail").fadeIn();
            }else{
                $("#noCity").hide();
                $("#fail").hide();
                $("#success").html(data).fadeIn();

            }
          });
        }else{
          $("#noCity").fadeIn();

        }
      });
    </script>
  </body>
</html>
