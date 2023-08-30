<?php
include 'connect.php';
$id = $_GET['delete_id'];
if (isset($_GET['delete_id'])){
    $sql = "DELETE FROM register WHERE id = $id";

    $result = mysqli_query($conn,$sql);

    if ($result){
        echo '<script>alert("Deleted successfully"); window.location="view.php";</script>';
        // header("Location:view.php");
    }else{
        die(mysqli_error($conn));
    }
}

?>