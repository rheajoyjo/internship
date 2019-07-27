<?php

$con=mysqli_connect("localhost","root","","internship");
if(mysqli_connect_errno())

{

	echo"failed to connect MYSQL:".
	mysqli_connect_error();
}
?>