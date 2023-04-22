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
<title>Contact Us</title>
</head>
<style>
	#plot4{
		font-family: "Trebuchet MS", Helvetica, sans-serif;
		padding: 2px;
		font-weight: lighter;
	    color: black;
		font-size: 17px;
	}
  #fname, #subject, #email, #buttn{
  height: 40px;
  font-size: 17px;
}
#comments{
  height: 100px;
  font-size: 17px;
}
</style>
<body>
 <header>
 	<?php include "home_header.php"?>
 </header>
 <div id="plot4" class="container ">

  <script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'plot4');
  }
  </script>

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <h1 class="w3-center">Contact Us</h1><br>
  <div class="row">
    <div class="col-sm-8">
      
      <form method="post" action="">
        <h2 class="w3-xlarge">WE WANT TO HEAR FROM YOU</h2><br>
        
        <div class="col-sm-9 form-group  ">
              <input class="form-control" id="fname" name="fname" placeholder="Please Enter Your Full Name" type="text" value="" required>
            </div><br>
            <div class="col-sm-9 form-group">
              <input class="form-control" id="email" name="email" placeholder=" Enter Your Email Address" type="email" value="" required>
            </div><br>
            <div class=" col-sm-9 form-group">
              <input class="form-control" id="subject" name="subject" placeholder="Enter a Subject" type="text" value="" required>
            </div><br>
            <div class="col-sm-10 form-group">
             <textarea class="form-control" id="comments" name="comment" placeholder="Place Your Comment or Enquiries" ></textarea>
            </div><br><br>
           <div class="col-sm-12 form-group">
                <button id="buttn" class="btn btn-default  btn btn-success " type="submit">Send Your Message </button>
           </div><br><br>
      </form>
      
    </div>
    <div class="col-sm-4 w3-leftbar">
      <h2 class="w3-xlarge">WE VALUE YOUR FEEDBACK</h2>
      <hr>
      <br>
      <p>Thank you for visiting Quick Courier Delivery Service website. If you have any comments or feedback, please contact us through any of the following mediums below. We undertakes to respond to all customer queries or inquiries made through the email channel not later than 48 hours from time of receipt. To schedule a parcel pickup, simply send a message to the admin.</p>

      <br>
      <h2><span class="w3-text-red">02.</span> CONTACT INFORMATION</h2>
      <br>
      <hr>
      <br>
      <p class="w3-text-black"><span class="glyphicon glyphicon-map-marker w3-text-blue w3-xlarge"> </span>420, 5th Avenue
          (At 37th Street) - 8th Floor New York, N.Y. 10018-2702 USA</p>
      <p class="w3-text-black"><span class="glyphicon glyphicon-map-marker w3-text-blue w3-xlarge"> </span>Airportplein 9755, 3045 AP Rotterdam, Netherlands</p>

      <p class="w3-text-black"><span class="glyphicon glyphicon-phone w3-text-blue w3-xlarge"></span> +1 (226) 804-0225</p>

      <p class="w3-text-black"><span class="glyphicon glyphicon-envelope w3-text-blue w3-xlarge"></span> customercare@quickcourierservices.site</p>
      
    </div>
    
  </div>
  

    <!-- Left and right controls -->
  </div>

 <footer>
 	<?php include "home_footer.php"?>
 </footer>

</body>
</html>