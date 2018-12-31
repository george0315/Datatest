<?php
$json_array = array();
        
        while ($row = mysqli_fetch_assoc($re)){
            $json_array[] = $row1;
        }
        
        echo'<pre>';
        print_r($json_array);
        echo'</pre>';
       

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
         ?>

