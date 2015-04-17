<?php 
 #connector
 mysql_connect("localhost", "exampleuser", "password") or die(mysql_error()); 
 mysql_select_db("database") or die(mysql_error()); 
?> 
