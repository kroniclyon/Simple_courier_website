<!DOCTYPE html>
<html>
<head>	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<title>Track Shipment</title>
</head>
<style>
	#plot5{
		font-family: "Trebuchet MS", Helvetica, sans-serif;
		padding: 2px;
		font-weight: lighter;
	    color: black;
		font-size: 17px;
	}
  #trackid{
  height: 40px;
  font-size: 17px;
}
#buttn{
  width: 50%;
  height: 40px;
  font-size: 17px;
}

</style>

<body>
 <header>
 	<?php include "home_header.php"?>
 </header>
 <div id="plot5" class="container ">

  <script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'plot5');
  }
  </script>

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 <br><br>
   <h3 class="jumbotron w3-center w3-text-red w3-large">We provide real-time tracking updates for your Parcel� deliveries. If you want to track your parcel, simply enter tracking numbers in the parcel tracking box below to see where your parcel is and its current delivery status.</h3>
   <br>
   <p class="w3-center w3-xlarge">Enter your parcel tracking number in the box below</p><br><br>
   <form method="post" action="#">
    <div class=" form-group  w3-xlarge">
              <input class="form-control form-control-lg btn-outline-info w3-center" id="trackid" name="trackid" placeholder=" E.G 663209543" type="text" value="" required>
     </div><br>
     <div class="col-sm-12 form-group w3-center">
                <button id="buttn" class="btn btn-default btn-outline-success " type="submit">TRACK </button>
      </div>
     
   </form>
   <br><br>

   <?php require_once "track_action.php" ?>


    <!-- Left and right controls -->
  </div>

  <br><br>

 <footer>
 	<?php include "home_footer.php"?>
 </footer>

</body>
</html>