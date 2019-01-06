<?php session_start(); ?>
<?php
include 'sql.inc.php';
$acc = $_SESSION['accnum'];
$id = $_GET['id'] ;
$status = $_GET['status'] ;
$text = $_GET['text'] ;
echo "$id" ;
echo "$status" ;
echo "$text" ;
$sql = "UPDATE reservation SET status = '已取消' where ID = '$id' " ;

?>