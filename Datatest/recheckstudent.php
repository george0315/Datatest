<?php session_start(); ?>
<?php
$now = date('Y-m-d');
$acc = $_SESSION['accnum'];
$name = $_SESSION['name'] ;
include 'sql.inc.php';
include 'sql.res.php';
$object = $_POST['object'];
$teacher = $_POST['teacher'];
$date = $_POST['date'];
$time = $_POST['time'];
$nop = $_POST['nop'] ;
$questions = $_POST['question_s'] ;
$sql1 = "Select * FROM information where accnum = '$acc'"  ;
$re = mysqli_query($conn,$sql1) ;
$row=mysqli_fetch_array($re,MYSQLI_ASSOC);
if($acc != null && $object != null && $teacher != null && $date != null && $time != null && $nop != null)
{   
  if($now > $time){
                echo '<script>alert("此時段已過期，請選擇其他時段來預約");</script>';
                mysqli_close($conn) ;
                echo '<script>window.location.replace("student_record.php");</script>';
  }
  else{
       if($acc==$acc2 && $date==$date2 && $time == $time2 && $name == $name2){
                echo '<script>alert("此時段您已預約，請先取消或選擇其他時段預約");</script>';
                mysqli_close($conn) ;
                echo '<script>window.location.replace("student_record.php");</script>';
        
      }
        else{
           //新增資料進資料庫語法
           $sql = "INSERT INTO reservation (ACCNUM,OBJECT,TEACHER, DATE, TIME, NOP, QUESTION_S,STATUS,NAME_S) VALUES ('$acc', '$object', '$teacher', '$date', '$time','$nop','$questions','審核中','$name')";
           if(mysqli_query($conn,$sql))
           {
                echo '<script>alert("預約成功");</script>';
                mysqli_close($conn) ;
                echo '<script>window.location.replace("student_record.php");</script>';
           }
           else
           {
                echo '<script>alert("預約失敗，請稍後再試");</script>';
                mysqli_close($conn) ;
                echo '<script>window.location.replace("student_login.php");</script>';
           }
       }
  }
}
else
{
        echo '<script>alert("預約失敗，請稍後再試");</script>';
        mysqli_close($conn) ;
        echo '<script>window.location.replace("student_login.php");</script>';
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

