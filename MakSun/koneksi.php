<?php
$link = mysqli_connect('localhost', 'root', ''); 
    
    if (!mysqli_select_db($link,'web_mknsunda'))     
    	die("Unable to select database: " . mysqli_error()); 
?>