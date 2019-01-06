<?php session_start(); ?>
<?php if($_SESSION['accnum']== null){
     header("Location: out.php") ;
}?>
<?php
//連結資料庫
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
//session部分   之後需要修改請從此處
$acc = $_SESSION['accnum'];
$name1 = $_SESSION['name'];
$sql1 = "Select * FROM information where accnum = '$acc' " ;
$re = mysqli_query($conn,$sql1) ;
$row=mysqli_fetch_array($re,MYSQLI_ASSOC);
//$pw = $row['PASSWORD'];
//$name = $row['NAME'];
//$passqa = $row['PASSQA'];
//$department = $row['DEPARTMENT'] ;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
