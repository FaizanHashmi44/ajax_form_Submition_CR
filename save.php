<?php

$conn = new mysqli("localhost","root","","ajax_form");

if (!$conn) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}

$email = $_POST['email'];
$country = $_POST['country'];
$age = $_POST['age'];

$query = "INSERT INTO user (email, country, age) VALUES ('$email', '$country', '$age')";
$result = mysqli_query($conn, $query);

if(!$result){
  echo "Your record is not saved";
}else{
  echo "your record is saved";
}

?>