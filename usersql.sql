CREATE TABLE IF NOT EXISTS `parcels_info` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `track_id` varchar(9) NOT NULL, 
  `parcel_no` varchar(20) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_address` varchar(400) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `receiver_address` varchar(500) NOT NULL,
  `phone_no` varchar(14) NOT NULL,
  `email_add` varchar(200) NOT NULL,
  `parcel_description` varchar(200) NOT NULL,
  `parcel_quantity` varchar(30) NOT NULL,
  `parcel_value` varchar(30) NOT NULL,
  `departure_date` varchar(20) NOT NULL,
  `arrival_date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

<?php
$servername = "localhost";
$username = "quickdel_admin";
$password = "08075776897lyon";
$dbname = "quickdel_courier";

// Create connection
$dbcon = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
}





?>