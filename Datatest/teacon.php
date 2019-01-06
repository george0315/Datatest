<?php session_start(); ?>
<?php
include 'sql.inc.php';
$acc = $_SESSION['accnum'];
$id = $_POST['id'] ;
$status = $_POST['status'] ;
$comment = $_POST['comment'] ;
if($status == 1){
	$status1 = "接受" ;
}else if($status == 2){
	$status1 = "婉拒" ;
}
$sql = "UPDATE reservation SET status = '$status1' ,QUESTION_T = '$comment' where ID = '$id' " ;
if(mysqli_query($conn,$sql))
        {
        echo '<script>alert("預約'.$status1.'成功");</script>';
        mysqli_close($conn) ;
        echo '<script>window.location.replace("teacher_login.php");</script>';
    } else{
		echo '<script>alert("預約'.$status1.'失敗");</script>';
        mysqli_close($conn) ;
		echo '<script>window.location.replace("teacher_login.php");</script>';
	}
//echo "$id</br>" ;
//echo "$status" ;
//echo "$comment" ;
//$sql = "UPDATE reservation SET status = '已取消' where ID = '$id' " ;

?>