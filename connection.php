<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="gym";

$conn =mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo"Connection successfully ";
}
else{
echo"Error";    
}

// if(isset($_POST['buttonn'])){

// $name=$_post['name'];
// $contact=$_post['contact'];
// $query="INSERT INTO gympage(NAME,CONTACT) VALUE ('$name','$contact')";
// $run=mysqli_query($conn,$query);

//}

?>