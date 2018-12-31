<?php 
$servername = "localhost";
$username = "root";
$password = "7eKyUaaWsNm7O795";
$dataname = "data" ;
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dataname);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
// Perform queries 
mysqli_query($conn,"SET NAMES UTF8");
?>

<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->

