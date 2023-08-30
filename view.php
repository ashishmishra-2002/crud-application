<?php
include 'connect.php';
include 'navbar.php';

session_start();

if(!isset($_SESSION['email'])){
    header('Location:login.php');
}

$sql = 'SELECT * FROM register';



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sr No.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <?php
  $result = mysqli_query($conn,$sql);

  if ($result){
      while($row  = mysqli_fetch_array($result)){
        $id = $row['id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $password = $row['password'];
        echo "<tbody>
        <tr>
          <th scope='row'>".$id."</th>
          <td>".$first_name."</td>
          <td>".$last_name."</td>
          <td>".$email."</td>
          <td>".$phone."</td>
          <td>".$password."</td>
          <td>
            <a href='update.php?update_id=$id' class='btn btn-warning'>Update</a>
            <a href='delete.php?delete_id=$id' class='btn btn-danger'>Delete</a>
          </td>
        </tr>
      </tbody>";
      }
      
  }
  ?>
  
</table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>