<?php session_start() ;?>
<?php
include 'sql.inc.php';
$acc = $_SESSION['accnum'];
$sql = "Select * FROM information where accnum = '$acc' " ;
$re = mysqli_query($conn,$sql) ;
$row=mysqli_fetch_array($re,MYSQLI_ASSOC);
$pw = $_POST['pw'] ;
$pw2 = $_POST['pw2'] ;
$name = $row['NAME'] ;
if($pw == $pw2){
    $sql1 ="UPDATE information SET PASSWORD = '$pw' WHERE NAME = '$name'" ;
    if(mysqli_query($conn,$sql1))
        {
        echo '<script>alert("密碼更新成功");</script>';
        mysqli_close($conn) ;
        session_unset();
        session_destroy();
       echo '<script>window.location.replace("login.php");</script>';
    }
}
    else{
        echo '<script>alert("密碼更新失敗");</script>';
        mysqli_close($conn) ;
        session_unset();
        session_destroy();
        echo '<script>window.location.replace("login.php");</script>';
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

