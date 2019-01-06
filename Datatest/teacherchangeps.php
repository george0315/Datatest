<?php session_start() ; ?>
<?php
include 'sql.inc.php';
$acc = $_SESSION['accnum'];
$sql = "Select * FROM information where accnum = '$acc' " ;
$re = mysqli_query($conn,$sql) ;
$row=mysqli_fetch_array($re,MYSQLI_ASSOC);
$pwr = $row['PASSWORD'];
$pw = $_POST['pw'] ;
$pw1 = $_POST['pw1'] ;
$pw2 = $_POST['pw2'] ;
$name = $row['NAME'] ;
if($pw == $pwr){
if($pw1 == $pw2){
    $sql1 ="UPDATE information SET PASSWORD = '$pw1' WHERE NAME = '$name'" ;
    if(mysqli_query($conn,$sql1))
        {
        echo '<script>alert("密碼修改成功");</script>';
        mysqli_close($conn) ;
       echo '<script>window.location.replace("teacher_login.php");</script>';
    }
}
    else{
        echo '<script>alert("密碼修改失敗");</script>';
        mysqli_close($conn) ;
        echo '<script>window.location.replace("teacher_change_pw.php");</script>';
    }
}else{
    echo '<script>alert("輸入錯誤，請重新輸入");</script>';
        mysqli_close($conn) ;
       echo '<script>window.location.replace("teacher_change_pw.php");</script>';
}



