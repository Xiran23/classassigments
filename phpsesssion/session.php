<?php


//session is way to store in dif page 

session_start(); 

$_SESSION['username'] = "HARRY"; 
$_SESSION['favcat'] = "books"; 

echo "we have yout session";











?>


<a href="getdata.php">getdata</a>