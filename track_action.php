<?php
include "dbconnect.php";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$trackid ="";
$trackidErr ="";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($_POST['trackid'])) {
		$trackidErr = "Please Enter The Name Of The Product";
	} else {
		$trackid = test_input($_POST['trackid']);
	}
	$trackid = mysqli_escape_string($dbcon, $trackid);

	if (!$trackidErr) {
		$query = "SELECT * FROM `parcels_info` WHERE `track_id` LIKE '%$trackid%' ORDER BY `id` ";
		$result = mysqli_query ($dbcon, $query); // Run the query
		if ($result) { // If the query ran OK, display the records
		// Fetch and print the records
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {?>
  <div class="container">
  	<h3 class="jumbotron w3-center w3-large btn-outline-warning">Delivery Report For Parcel No: <span class="w3-text-red">#<?php echo $row['parcel_no'];?></span></h3>
  	 <div class="#">
	 <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
      Sender's Name:
      <span class=" w3-text-red"><?php echo $row['sender_name'];?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
      Sender's Address:
      <span class="w3-text-red"><?php echo $row['sender_address'];?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
      Recipient Name:
      <span class="w3-text-red"><?php echo $row['receiver_name'];?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
      Delivery Address:
      <span class="w3-text-red"><?php echo $row['receiver_address'];?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
      Recipient Phone No:
      <span class="w3-text-red"><?php echo $row['phone_no'];?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
      Recipient Email:
      <span class="w3-text-red"><?php echo $row['email_add'];?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
      Parcel Description:
      <span class="w3-text-red"><?php echo $row['parcel_description'];?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
      Parcel Quantity/ Weight:
      <span class="w3-text-red"><?php echo $row['parcel_quantity'];?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
      Parcel Value:
      <span class="w3-text-red"><?php echo $row['parcel_value'];?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
      Departure Date:
      <span class="w3-text-red"><?php echo $row['departure_date'];?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
      Arrival Date:
      <span class="w3-text-red"><?php echo $row['arrival_date'];?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
      Current Location:
      <span class="w3-text-red"><?php echo $row['current_location'];?></span>
    </li>
   </ul>
	</div> 
  	
  </div>




		<?php }  mysqli_free_result ($result); // Free up the resources
		} else { // If it did not run OK
		// Error message
		echo '<p class="error">The record could not be retrieved. We apologize 
		for any inconvenience.</p>';
		// Debugging message
		echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $query . '</p>';
		 // End of if ($result). Now display the total number of records/houses 
	}
	}
	
	
}
?>