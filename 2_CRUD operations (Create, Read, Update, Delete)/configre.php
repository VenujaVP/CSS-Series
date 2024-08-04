<?php
$conn = mysqli_connect("localhost:3308", "root", "", "user_db");

if(!$conn){
    die("Error DB CONNECT". mysqli_connect_error());
}else{
    //echo "Connection Success";
}
?>