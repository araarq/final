<?php
 $dsn = 'mysql:host=sql2.njit.edu;dbname=aaq8';
 $username = 'aaq8';
 $password = 'LTGcLS8w';
 try{
   $db = new PDO($dsn,$username,$password);
 }catch (PDOException $e){
   $error_message = $e->getMessage();
   echo $error_message;
   exit();
 }
?>