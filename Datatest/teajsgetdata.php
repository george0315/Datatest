<?php session_start(); ?>
<?php
$acc = $_SESSION['accnum'];
include 'sql.inc.php';
$sql =   "Select * FROM reservation where teaacc = '$acc' AND status != '審核中'"  ;
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
echo json_encode($output);
//還沒修完
//echo '<pre>' ;
//print_r($output) ;
//print_r($json_array) ;
//echo '</pre>' ;
?>