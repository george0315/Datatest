<!--後端處理頁面(測試中) -->
<?php session_start(); ?>
<?php
$acc = $_POST['accnum'];
$pw = $_POST['pass'];
include 'sql.inc.php';
// Perform queries 
$sql1 = "Select * FROM information where accnum = '$acc' " ;
$re = mysqli_query($conn,$sql1) ;
$row=mysqli_fetch_array($re,MYSQLI_ASSOC);
mysqli_close($conn) ;
if($acc != null && $pw != null && $row["ACCNUM"] == $acc && $row["PASSWORD"] == $pw)
{
        //將帳號寫入session
        $name = $row['NAME'];
        $_SESSION['accnum'] = $acc;
        $_SESSION['name'] = $name;
  if($row["IDENTITY"]== 'A' ){
      
        header("Location: student_login.php");
        
  }else if($row["IDENTITY"]== 'B' ){
   
        header("Location: teacher_login.php");
        }
}
else
{
       echo '<script>alert("登入失敗!");</script>';
       echo '<script>window.location.replace("login.php");</script>';
}
// printf ("%s %s %s %s %s %s\n",$row["IDENTITY"],$row["ACCNUM"],$row["PASSWORD"],$row["NAME"],$row["DEPARTMENT"],$row["PASSQA"]);
?>


