<?php
$sql2 = "Select * FROM reservation where accnum = '$acc'"  ;
$re2 = mysqli_query($conn,$sql2) ;
$row2=mysqli_fetch_array($re2,MYSQLI_ASSOC);
$acc2 = $row2["ACCNUM"];
$date2 = $row2["DATE"];
$time2 = $row2["TIME"];
$name2 = $row2["NAME_S"] ;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
