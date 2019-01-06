<?php
$now = date('Y-m-d');
$time = "2019-01-01" ;
$nowtime =  strtotime($now) ;
$future =  strtotime($time) ;
$answer = $nowtime - $future ;
echo "$now" ; 
echo '<br>' ; 
echo "$nowtime" ; 
echo '<br>' ; 
echo "$future" ;
echo '<br>' ; 
echo 'answer = '."$answer" ;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

