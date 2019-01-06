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
$nowtime =  strtotime($now) ;
$future =  strtotime($date) ;
$sql1 = "Select * FROM information where accnum = '$acc'"  ;
$re = mysqli_query($conn,$sql1) ;
$row=mysqli_fetch_array($re,MYSQLI_ASSOC);
if($acc != null && $object != null && $teacher != null && $date != null && $time != null && $nop != null)
{   
  if($nowtime - $future >= 0){
                echo '<script>alert("此時段已過期，請選擇其他時段來預約");</script>';
                mysqli_close($conn) ;
                echo '<script>window.location.replace("student_login.php");</script>';
  }
  else{
      for($i = 0 ; $i <= $a-1;$i++){
       if($acc==$acc2[$i] && $date==$date2[$i] && $time == $time2[$i] && $name == $name2[$i]){
                echo '<script>alert("此時段您已預約，請先取消或選擇其他時段預約");</script>';
                mysqli_close($conn) ;
                echo '<script>window.location.replace("student_record.php");</script>';       
                } 
          } 
       }
       //檢查無誤後找尋老師帳號
        $teachername = mb_substr($teacher,0,3,"utf-8");
        $sql3 = "select ACCNUM from information where name = '$teachername'" ;
        $re3 = mysqli_query($conn,$sql3) ;
	    $row3=mysqli_fetch_array($re3,MYSQLI_ASSOC);
	    $teaacc = $row3["ACCNUM"] ;		
        //這邊要再檢查
           //新增資料進資料庫語法
           $sql = "INSERT INTO reservation (ACCNUM,OBJECT,TEACHER, DATE, TIME, NOP, QUESTION_S,STATUS,NAME_S,TEAACC) VALUES ('$acc', '$object', '$teacher', '$date', '$time','$nop','$questions','審核中','$name','$teaacc')";
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
else
{
        echo '<script>alert("預約失敗，請稍後再試");</script>';
        mysqli_close($conn) ;
        echo '<script>window.location.replace("student_login.php");</script>';
}
 

