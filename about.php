<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
    .jumbotron2
    {
        height: 230px;
        background-color:black;
        text-align: center;
    }

    #app
    {
        border-radius: 10px;
    }




</style>

  </head>

  <body>
<?php include 'navbar.php' ?>
<section>
<div class="container">
  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/naveed.jpg" alt="GTAV">
      <div class="caption">
        <h3>NAVEED UL AZIZ</h3>
        <p>THE CEO AT GAME HUB PAKISTAN</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/ahmad.jpg" alt="GTAV">
      <div class="caption">
        <h3>AHMAD WAHAJ RAZA</h3>
        <p>VICE PRESIDENT</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/ahsan.jpg" alt="GTAV">
      <div class="caption">
        <h3>AHSAN MUGHAL</h3>
        <p>SENIOR GAME DEVELOPER</p>
        
      </div>
    </div>
  </div>
</div>
</div>
</section>


<section>
    <div class="container">
    <div class="jumbotron jumbotron2">

        <img src="images/app.jpg" alt="App store" height="100px" id="app">

        <h3 style="color:white;">Download Our App and Enjoy</h3>

     </div>
     </div>


</section>











    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
 </body>
</html>