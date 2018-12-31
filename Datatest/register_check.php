<?php session_start(); ?>
<?php
include 'sql.inc.php';
$acc = $_POST['accnum'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$name = $_POST['name'];
$passqa = $_POST['passqa'];
$department = $_POST['department'] ;
$sql1 = "Select * FROM information where accnum = '$acc'"  ;
$re = mysqli_query($conn,$sql1) ;
$row=mysqli_fetch_array($re,MYSQLI_ASSOC);
if($row["ACCNUM"] == $acc){
    echo '<script>alert("此學號已有人註冊，如有疑問請洽客服人員，LINE ID:");</script>' ;
    echo '<script>window.location.replace("register.php");</script>';
}

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($acc != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        //新增資料進資料庫語法
        $sql = "INSERT INTO information (IDENTITY, ACCNUM, PASSWORD, NAME, DEPARTMENT, PASSQA) VALUES ('A', '$acc', '$pw', '$name', '$department', '$passqa')";
        if(mysqli_query($conn,$sql))
        {
                echo '<script>alert("註冊成功");</script>';
                mysqli_close($conn) ;
                echo '<script>window.location.replace("login.php");</script>';
        }
        else
        {
                echo '<script>alert("註冊失敗，請稍後在試");</script>';
                mysqli_close($conn) ;
                echo '<script>window.location.replace("register.php");</script>';
        }
}
else
{
        echo '<script>alert("系統忙碌中，請稍後在試");</script>';
        mysqli_close($conn) ;
       echo '<script>window.location.replace("login.php");</script>';
}
?>
<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->

