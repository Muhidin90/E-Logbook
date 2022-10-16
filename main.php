<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$tellNumber = $_POST["pnum"];
$whereTheGuestIsComingFrom = $_POST["from"];
$whereTheGuestIsGoing =$_POST["to"];
$logdate = date("Y-m-d");
$logInTime = date("h:i:sa");
$logOutTime = date("h:i:sa"); // update


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logbook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mainbook (firstName, lastName, phoneNumber, guestsAdress, vistingTo, inDate, inTime)
VALUES ('$fname', '$lname', '$tellNumber','$whereTheGuestIsComingFrom', '$whereTheGuestIsGoing', '$logdate', '$logInTime')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Good')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

