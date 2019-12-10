<?php 

$dbconnection = mysqli_connect("127.0.0.1", "root", "", "crude_db");

if($dbconnection){
	echo "connection up!";}
else{
	die("we are the children");}

 ?>