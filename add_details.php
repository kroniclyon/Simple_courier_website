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
<title>Quick Courier Delivery Service.</title>
</head>
<style>
	#plot8{
		font-family: "Trebuchet MS", Helvetica, sans-serif;
		padding: 2px;
		font-weight: lighter;
	    color: grey;
		font-size: 19px;
	}
  label{
    color: grey;


}
</style>
<body>
 <header>
 	<?php include "home_header.php"?>
 </header>
 <div id="plot8" class="container">

  <script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'plot8');
  }
  </script>

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <h2 class="jumbotron w3-center w3-text-light-green">Enter Shipment Information on the field below</h2>
  <div class="">
    <form action="#" method="post">
      <?php require_once "add_details_account.php" ?>

      <h2 class="jumbotron bg-info w3-center">PARCEL SHIPMENT INFORMATION</h2>
      <div class="form-group col-sm-6">
        <label for="text">Tracking ID:</label>
        <input type="text" class="form-control form-control-lg btn-outline-secondary w3-large" name="track_id">
      </div>
      <div class="form-group col-sm-6">
        <label for="text">Parcel No:</label>
        <input type="text" class="form-control form-control-lg btn-outline-secondary w3-large" name="parcel_no">
      </div>
      <div class="form-group col-sm-6">
        <label for="text">Sender's Name:</label>
        <input type="text" class="form-control form-control-lg btn-outline-secondary w3-large" name="sendername">
      </div>
      <div class="form-group col-sm-6">
        <label for="text">Sender's Address:</label>
        <input type="text" class="form-control form-control-lg btn-outline-secondary w3-large" name="senderadd">
      </div>
      <div class="form-group col-sm-6">
        <label for="text">Receiver's Name:</label>
        <input type="text" class="form-control form-control-lg btn-outline-secondary w3-large" name="receiver_name">
      </div>
      <div class="form-group col-sm-6">
        <label for="text">Receiver's Address:</label>
        <input type="text" class="form-control form-control-lg btn-outline-secondary w3-large" name="receiver_add">
      </div>
      <div class="form-group col-sm-6">
        <label for="text">Receiver's Phone No:</label>
        <input type="text" class="form-control form-control-lg btn-outline-secondary w3-large" name="receiver_phone">
      </div>
      <div class="form-group col-sm-6">
        <label for="text">Receiver's Email Address:</label>
        <input type="email" class="form-control form-control-lg btn-outline-secondary w3-large" name="receiver_email">
      </div>
       <div class="col-sm-11 form-group">
        <label for="text">Parcel Description:</label>
             <textarea class=" form-control form-control-lg btn-outline-secondary w3-large" id="parcel_descriptn" name="parcel_descriptn" placeholder="Describe the content of the parcel" rows="7"></textarea><span class="w3-xlarge w3-text-red error">*</span>
            </div>
       <div class="form-group col-sm-4">
        <label for="text">Parcel Quantity:</label>
        <input type="text" class="form-control form-control-lg btn-outline-secondary w3-large" name="parcel_qty">
      </div>
       <div class="form-group col-sm-4">
        <label for="text">Parcel Value</label>
        <input type="text" class="form-control form-control-lg btn-outline-secondary w3-large" name="parcel_value">
      </div>
       <div class="form-group col-sm-4">
        <label for="text">Departure Date:</label>
        <input type="text" class="form-control form-control-lg btn-outline-secondary w3-large" name="depart_date">
      </div>
      <div class="form-group col-sm-4">
        <label for="text">Arrival Date:</label>
        <input type="text" class="form-control form-control-lg btn-outline-secondary w3-large" name="arrival_date">
      </div>
      <div class="form-group col-sm-4">
        <label for="text">Current Location:</label>
        <input type="text" class="form-control form-control-lg btn-outline-secondary w3-large" name="current_location">
      </div>
    
  </div>
  
  <div class="col-sm-12 form-group w3-center">
      <button id="buttn" class="btn btn-default btn-outline-danger btn-block btn-lg w3-large" type="submit">ADD TRACKING DETAILS </button>
  </div>
  </form>

   
 </div>
 <br><br>
 <footer>
 	<?php include "home_footer.php"?>
 </footer>

</body>
</html>