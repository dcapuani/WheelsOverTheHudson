<?php 
  
    $server="localhost"; 
    $user="ShopingCart"; 
    $pass="Wheels228!"; 
    $db="ShopingCart"; 
      
    // connect to mysql 
      
    mysql_connect($server, $user, $pass) or die("Sorry, can't connect to the sql."); 
      
    // select the db 
      
    mysql_select_db($db) or die("Sorry, can't select the database."); 
  
?>