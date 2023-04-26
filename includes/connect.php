<?php

$con = mysqli_connect('localhost', 'root', '', 'online_store');

// if($con){
//     echo "Local Databse Connection is Successful";
// }
// else{
//     die(mysqli_error($con));
// }

if (!$con) {
    die(mysqli_error($con));
}


?>