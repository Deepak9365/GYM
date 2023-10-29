<?php
include 'connection.php';
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    // collect value of input field
    $name    = $_REQUEST['name'];
    $contact =$_REQUEST['contact'];
    $query="INSERT INTO gympage(NAME,CONTACT) VALUE ('$name','$contact')";
     $run=mysqli_query($conn,$query);
    
     header("Location: index.php");
}


?>