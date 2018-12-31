<?php session_start() ;?>
<?php
include 'sql.inc.php';
$acc = $_POST['accnum'] ;
$sql = "Select * FROM information where accnum = '$acc' " ;
$re = mysqli_query($conn,$sql) ;
$row=mysqli_fetch_array($re,MYSQLI_ASSOC);
if($row["ACCNUM"]== $acc ){
    $_SESSION['accnum'] = $acc;
    mysqli_close($conn) ;
    header("Location: forget_pw2.php");
}
else{
    mysqli_close($conn) ;
    echo '<script>alert("輸入錯誤，請重新輸入");</script>';
    echo '<script>window.location.replace("forget_pw.php");</script>';
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

