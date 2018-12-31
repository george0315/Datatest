<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php session_start() ;?>
<?php
session_unset();
session_destroy();
echo '<script>window.location.replace("login.php");</script>';
/*echo '<script>window.location.replace("home.php");</script>';*/
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
    </body>
</html>





