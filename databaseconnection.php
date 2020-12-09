<?php  
$host = 'localhost:3307'; 
$username = 'root';  
$password = '';  
$database='users';
$conn = mysqli_connect($host,$username, $password,$database);  
if(!$conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
 
?>  