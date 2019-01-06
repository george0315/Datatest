<?php session_start(); ?>
<?php
$acc = $_SESSION['accnum'];
include 'sql.inc.php';
//$conn = mysqli_connect("localhost","root","7eKyUaaWsNm7O795","data");
//mysqli_query($conn, "SET NAMES 'utf8'");
$sql =   "Select * FROM reservation where accnum = '$acc'"  ;
//ACCNUM,OBJECT,TEACHER,DATE,TIME,NOP,QUESTION_S,STATUS,QUESTION_T
        //"select * from data_1 where ACCNUM= \"{$_SESSION['accnum']}\" ";
$result = mysqli_query($conn, $sql);
if($result == FALSE) {
    echo (mysqli_error($conn));
}
else {
$json_array = array();
while ($row = mysqli_fetch_assoc($result)){
    
     $json_array[] = $row;
}
$output = array("data"=>$json_array); 
}
 //json_encode($output) ;
echo json_encode($output);
//還沒修完
//echo '<pre>' ;
//print_r($output) ;
//print_r($json_array) ;
//echo '</pre>' ;
?>