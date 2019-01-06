<?php session_start(); ?>
<?php
include 'sql.inc.php';
$acc = $_SESSION['accnum'];
$id = $_POST['id'] ;
$status = $_POST['status'] ;
$comment = $_POST['comment'] ;
$sql = "SELECT * from reservation  where ID = '$id' " ;
$re = mysqli_query($conn,$sql) ;
$row=mysqli_fetch_array($re,MYSQLI_ASSOC);
$sqlstatus = $row["STATUS"] ;
if($comment != "" || null){
 if($status == 1){
	$status1 = "接受" ;
	$sql = "UPDATE reservation SET status = '$status1' ,QUESTION_T = '$comment' where ID = '$id' " ;
	if(mysqli_query($conn,$sql)){
	    echo '<script>alert("修改成功");</script>';
        mysqli_close($conn) ;
        echo '<script>window.location.replace("teacher_already.php");</script>';
	}else{
		echo '<script>alert("修改失敗");</script>';
        mysqli_close($conn) ;
		echo '<script>window.location.replace("teacher_already.php");</script>';
	}//status== 1結束
}else if($status == 2){
	$status1 = "婉拒" ;
	$sql = "UPDATE reservation SET status = '$status1' ,QUESTION_T = '$comment' where ID = '$id' " ;
	if(mysqli_query($conn,$sql))
        {
        echo '<script>alert("修改成功");</script>';
        mysqli_close($conn) ;
        echo '<script>window.location.replace("teacher_already.php");</script>';
    } else{
		echo '<script>alert("修改失敗");</script>';
        mysqli_close($conn) ;
		echo '<script>window.location.replace("teacher_already.php");</script>';
	}//status== 2結束
}else if($status == 0){
	$status1 = $row["STATUS"] ;
	$sql = "UPDATE reservation SET QUESTION_T = '$comment' where ID = '$id' " ;
	if(mysqli_query($conn,$sql))
        {
        echo '<script>alert("修改成功");</script>';
        mysqli_close($conn) ;
        echo '<script>window.location.replace("teacher_already.php");</script>';
    } else{
		echo '<script>alert("修改失敗");</script>';
        mysqli_close($conn) ;
		echo '<script>window.location.replace("teacher_already.php");</script>';
	}
  }//status== 0結束
} else {    //else ($comment == " " || null)
 if($status == 1){
	$status1 = "接受" ;
	$sql = "UPDATE reservation SET status = '$status1'  where ID = '$id' " ;
	if(mysqli_query($conn,$sql)){
	    echo '<script>alert("修改成功");</script>';
        mysqli_close($conn) ;
        echo '<script>window.location.replace("teacher_already.php");</script>';
	}else{
		echo '<script>alert("修改失敗");</script>';
        mysqli_close($conn) ;
		echo '<script>window.location.replace("teacher_already.php");</script>';
	}//status== 1結束
}else if($status == 2){
	$status1 = "婉拒" ;
	$sql = "UPDATE reservation SET status = '$status1'  where ID = '$id' " ;
	if(mysqli_query($conn,$sql))
        {
        echo '<script>alert("修改成功");</script>';
        mysqli_close($conn) ;
        echo '<script>window.location.replace("teacher_already.php");</script>';
    } else{
		echo '<script>alert("修改失敗");</script>';
        mysqli_close($conn) ;
		echo '<script>window.location.replace("teacher_already.php");</script>';
	}
}else if($status == 0){ //status== 2結束	
        echo '<script>alert("尚未更改狀態或備註，請更改後再試一次");</script>';
        mysqli_close($conn) ;
        echo '<script>window.location.replace("teacher_already.php");</script>';
	}
  }//status== 0結束 //else ($comment == " " || null)結束
//echo "$id</br>" ;
//echo "$status1" ;
//echo "$comment" ;
//$sql = "UPDATE reservation SET status = '已取消' where ID = '$id' " ;

?>