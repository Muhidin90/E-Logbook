<?php
require('templates/connect.php');

 $itm = $_POST['delete'];
 $sql = "DELETE FROM MAINBOOK WHERE ID =$itm";
 $conn->query($sql);
 $conn->close();

?>