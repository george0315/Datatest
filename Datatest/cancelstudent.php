<?php session_start(); ?>
<?php
include 'sql.inc.php';
$acc = $_SESSION['accnum'];
$id = $_GET['id'] ;
$sql = "UPDATE reservation SET status = '已取消' where ID = '$id' " ;
if(mysqli_query($conn,$sql))
        {
        echo '<script>alert("預約取消成功");</script>';
        mysqli_close($conn) ;
        echo '<script>window.location.replace("student_record.php");</script>';
    } else{
		echo '<script>alert("預約取消失敗");</script>';
        mysqli_close($conn) ;
		echo '<script>window.location.replace("student_record.php");</script>';
	}
//echo "$id" ;
?>