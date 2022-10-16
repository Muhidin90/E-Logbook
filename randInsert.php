<?php
require('templates/connect.php');
$index=100;
$logdate = date('Y-m-d');
$logInTime=date('h:m:sa');



for($index; $index<110; $index++ ){
    $sql = "INSERT INTO mainbook (firstName, lastName, phoneNumber, guestsAdress, vistingTo, inDate, inTime)
VALUES ('name.$index.', 'lastname.$index.', '0754920945','Street.$index.', 'whereTheGuestIsGoing.$index.', '$logdate', '$logInTime')";
  $conn->query($sql);
}
$conn->close();
?>