
<?php
session_start();
include 'includes/header.html';
//include 'login/login_functions/database.php';
                     
                     //check about user done the email in signup 

                        if(!isset($_SESSION['email'])){
                           // echo "<script>" . "window.location.href = login/signup.php" . "</script>";
                            echo "<script>"."alert('Please Back To Signup First');" . "</script>";
                            die();
                        }
                    ?>

                 



<?php
include 'includes/header.html';
// include 'login/login_functions/database.php';
 include 'includes/navbar.html';
// Connection Information

$servername = "localhost";
$username = "root";//sql username
$password = "";//sql password
$dbname = "jobs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
     

     $user_email = $_SESSION['email'];
     $user_name = $_SESSION['c_name'];

        $sql = "SELECT * FROM dashboard WHERE  ";
         $result = mysqli_query($conn, $sql);
         
     
     
     
     
     
     
     
     
     