<?php
$conn = mysqli_connect('localhost','root','1234','learningphp');  

if(mysqli_connect_errno()){
    echo "FAILED TO connect". mysqli_connect_errno();
}
// echo "GET";
?>