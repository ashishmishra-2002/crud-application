<?php

$conn = mysqli_connect('localhost','root','root','login3');

if($conn){
    echo "";
}else{
    die(mysqli_error($conn));
}

?>