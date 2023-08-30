<?php
include 'connect.php';
include 'navbar.php';


$id = $_GET['update_id'];
if(isset($_POST['update'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    $sql = "UPDATE register
    SET first_name='$first_name', last_name='$last_name', email='$email',phone='$phone',password='$password'
    WHERE id='$id'";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Updated successfully";
    }else{
        echo "Failed to insert";
        die(mysqli_error($conn)); 
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <form method="post" action="">
            <div class="mb-3">
                <label  class="form-label">First Name:</label>
                <input type="text" class="form-control"  name="first_name" required>
                
            </div>
            <div class="mb-3">
                <label  class="form-label">Last Name:</label>
                <input type="text" class="form-control"  name="last_name" required>
                
            </div>
            <div class="mb-3">
                <label  class="form-label">Email Address:</label>
                <input type="email" class="form-control"  name="email" required>
                
            </div>
            <div class="mb-3">
                <label  class="form-label">Phone Number:</label>
                <input type="number" class="form-control"  name="phone" required>
                
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control"  name="password" required>
            </div>
            
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>