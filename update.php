<?php
require('templates/connect.php');

$target = $_POST['delete'];
$logOutTime = date("h:i:sa");
$sql="UPDATE mainbook set exitTime = '$logOutTime' where id = $target";
$conn->query($sql);
$conn->close();

header("location: getUsers.php");
die();
?>