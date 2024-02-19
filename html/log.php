<?php 

session_start();



// Test database connection.
if(!$dbconnect){
    echo "Database error" .mysqli_connect_error(); 
}else{
 
$username = $_SESSION['username'];
$email = $_SESSION['email'];

}

if(!isset($_SESSION['username'])) {
    // Redirect to login page.

    header('Location: auth-login-basic.php');
}  

?>