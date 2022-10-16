<?php include 'templates/header.php';

?>
   
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">mulax</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link" href="index.php">Home</a>
        <a class="nav-link active" href="guestUsers.php"  aria-current="page" >Guests</a>
        <a class="nav-link" href="# ">About us</a>
      </nav>
    </div>
  </header>

  <table class="table table-dark table-hover">
  <thead>
  <tr>
    <th>First Name</th>
    <th>Last name</th>
    <th>Phone number</th>
    <th>Adress</th>
    <th>Going to</th>
    <th>Date</th>
    <th>Time in </th>
    <th>Time out</th> 
    <th>Action</th>

  </tr>
 </thead>
 <tbody>
<?php
      require('templates/connect.php');

      $sql = "SELECT  id, firstName, lastName, phoneNumber, guestsAdress, vistingTo, inDate, Intime, exitTime FROM mainbook";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo(
            "<tr>
             <td>".$row['firstName']."</td>
             <td>".$row['lastName']."</td>
             <td>".$row['phoneNumber']."</td>
             <td>".$row['guestsAdress']."</td>
             <td>".$row['vistingTo']."</td>
             <td>".$row['inDate']."</td>
             <td>".$row['Intime']."</td>
             <td>".$row['exitTime']."</td>
             <td><form action='update.php' method='POST'>
                  <button name='delete' value='".$row['id']."'>logout</button>
                  </form>
             </td>

            
            </tr>"
          );
         
        }
      } else {
        echo "0 results";
      }
      $conn->close();
?>
</tbody>
</table>

<?php include 'templates/footer.php';?> 