<?php        
//include 'sql.inc.php';
$sql2 = "Select * FROM reservation where accnum = '$acc'"  ;
$re2 = mysqli_query($conn,$sql2) ;
//$row2=mysqli_fetch_array($re2,MYSQLI_ASSOC);
while ($row2= mysqli_fetch_assoc($re2)){
      $array[] = $row2;
}
$a = count($array) ;
for($i = 0 ; $i<= $a - 1 ; $i++){
      $date2[$i] =  $array[$i]["DATE"] ;
      $time2[$i] =  $array[$i]["TIME"] ;
      $acc2[$i]  =  $array[$i]["ACCNUM"];
      $name2[$i] =  $array[$i]["NAME_S"];
      
}
/*echo'<pre>';
print_r($date2) ;
print_r($time2) ;
print_r($acc2);
print_r($name2);

echo'</pre>';
 
?>
