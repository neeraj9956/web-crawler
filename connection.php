<?php

$servername="localhost";
$username="root";
$password="";
$dbname="googlenew";
// to create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	//echo "connection sucess";
}
else
{
	//die("connection failed".mysql_connect_error());
}


?>