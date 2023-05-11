<?php


//get the data 

session_start(); 

if(isset($_SESSION['username'])){

    
    echo $_SESSION['username'].'welcome'; 
    echo '<br>';
    echo $_SESSION['favcat'];
}
else {
    echo 'Guest';
}

// $_SESSION['favcat'] = "books"; 

// echo "we have yout session";











?>

<a href="logout.php">logout</a>