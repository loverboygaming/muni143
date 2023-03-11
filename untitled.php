<?php
$servername = "0.0.0.0";
 $username="root";
 $password="root";
 $database_name="muni";

$conn=mysqli_connect($servername, $username,$password,$database_name);

if($conn){
  //echo "connection ok";
}
else{
  echo "connection failed";
}

?>