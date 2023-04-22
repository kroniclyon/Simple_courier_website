<?php
require "dbconnect.php";


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$track_idErr = $parcel_noErr = $sendernameErr = $senderaddErr = $receiver_nameErr = $receiver_addErr = $receiver_phoneErr = $receiver_emailErr = $parcel_descriptnErr = $parcel_qtyErr = $parcel_valueErr = $depart_dateErr = $arrival_dateErr = $current_locationErr = "";
$track_id = $parcel_no = $sendername = $senderadd = $receiver_name = $receiver_add = $receiver_phone = $receiver_email = $parcel_descriptn = $parcel_qty = $parcel_value = $depart_date = $arrival_date = $current_location =  "";
if ($_SERVE['REQUEST_METHOD'] = 'POST') {

	if (empty($_POST['track_id'])) {
		$track_idErr = "Please Enter Parcel tracking ID";
	}else{
		$track_id = test_input($_POST['track_id']);
		
	}
	if (empty($_POST['parcel_no'])) {
		$parcel_noErr = "Please Enter the Parcel No";
	}else{
		$parcel_no = test_input($_POST['parcel_no']);
		
	}
	if (empty($_POST['sendername'])) {
		$sendernameErr = "Please Enter the Parcel No";
	}else{
		$sendername = test_input($_POST['sendername']);
		
	}
	if (empty($_POST['senderadd'])) {
		$senderaddErr = "Please Enter the Parcel No";
	}else{
		$senderadd = test_input($_POST['senderadd']);
		
	}
	if (empty($_POST['receiver_name'])) {
		$receiver_nameErr = "Please Enter the Parcel No";
	}else{
		$receiver_name = test_input($_POST['receiver_name']);
		
	}
	if (empty($_POST['receiver_add'])) {
		$receiver_addErr = "Please Enter the Parcel No";
	}else{
		$receiver_add = test_input($_POST['receiver_add']);
		
	}
	if (empty($_POST['receiver_phone'])) {
		$receiver_phoneErr = "Please Enter the Parcel No";
	}else{
		$receiver_phone = test_input($_POST['receiver_phone']);
		
	}
	if (empty($_POST["receiver_email"])) {
	 	$receiver_emailErr = "Please Enter a valid Email Address";
	 } else {
	 	$receiver_email = test_input($_POST["receiver_email"]);
	 	if (!filter_var($receiver_email, FILTER_VALIDATE_EMAIL)) {
           $receiver_emailErr = "Invalid email format"; 
         }
	 }	
	}
	if (empty($_POST['parcel_descriptn'])) {
		$parcel_descriptnErr = "Please Enter the Parcel No";
	}else{
		$parcel_descriptn = test_input($_POST['parcel_descriptn']);
		
	}
	if (empty($_POST['parcel_qty'])) {
		$parcel_qtyErr = "Please Enter the Parcel No";
	}else{
		$parcel_qty = test_input($_POST['parcel_qty']);
		
	}
	if (empty($_POST['parcel_value'])) {
		$parcel_valueErr = "Please Enter the Parcel No";
	}else{
		$parcel_value = test_input($_POST['parcel_value']);
		
	}
	if (empty($_POST['depart_date'])) {
		$depart_dateErr = "Please Enter the Parcel No";
	}else{
		$depart_date = test_input($_POST['depart_date']);
		
	}
	if (empty($_POST['arrival_date'])) {
		$arrival_dateErr = "Please Enter the Parcel No";
	}else{
		$arrival_date = test_input($_POST['arrival_date']);
		
	}
	if (empty($_POST['current_location'])) {
		$current_locationErr = "Please Enter the Parcel No";
	}else{
		$current_location = test_input($_POST['current_location']);
		
	}

	 $track_id = mysqli_escape_string( $dbcon, $track_id);
	 $parcel_no = mysqli_escape_string( $dbcon, $parcel_no);
	 $sendername = mysqli_escape_string( $dbcon, $sendername);
	 $senderadd = mysqli_escape_string( $dbcon, $senderadd);
	 $receiver_name = mysqli_escape_string( $dbcon, $receiver_name);
	 $receiver_add = mysqli_escape_string( $dbcon, $receiver_add);
	 $receiver_phone = mysqli_escape_string( $dbcon, $receiver_phone);
	 $receiver_email = mysqli_escape_string( $dbcon, $receiver_email);
	 $parcel_descriptn = mysqli_escape_string( $dbcon, $parcel_descriptn);
	 $parcel_qty = mysqli_escape_string( $dbcon, $parcel_qty);
	 $parcel_value = mysqli_escape_string( $dbcon, $parcel_value);
	 $depart_date = mysqli_escape_string( $dbcon, $depart_date);
	 $arrival_date = mysqli_escape_string( $dbcon, $arrival_date);
     $current_location = mysqli_escape_string( $dbcon, $current_location);

     

	 if ($track_id && $parcel_no && $sendername && $senderadd && $receiver_name && $receiver_add && $receiver_phone && $receiver_email && $parcel_descriptn && $parcel_qty && $parcel_value && $depart_date && $arrival_date && $current_location) {
	$query1 = "INSERT INTO `parcels_info`(`track_id`, `parcel_no`, `sender_name`, `sender_address`, `receiver_name`, `receiver_address`,`phone_no`,`email_add`, `parcel_description`, `parcel_quantity`,`parcel_value`,`departure_date`,`arrival_date`,`current_location`)
        VALUES ('$track_id', '$parcel_no', '$sendername', '$senderadd', '$receiver_name', '$receiver_add','$receiver_phone','$receiver_email', '$parcel_descriptn', '$parcel_qty','$parcel_value','$depart_date','$arrival_date','$current_location')";


        if (mysqli_query($dbcon, $query1)) {?>
        	<div class="alert alert-success alert-dismissible">
			  <strong class="w3-center">Notice: </strong> Your Parcel has been shipped Successfully
			  <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
			</div>

       <?php } else {
        	echo "Error: " . $query1 . "<br>" . mysqli_error($dbcon);
  
        }
        }


?>