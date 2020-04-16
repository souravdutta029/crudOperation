<?php

	$stu_id = $_POST['sid'];
	$sname = $_POST['sname'];
	$saddress = $_POST['saddress'];
	$sclass = $_POST['sclass'];
	$sphone = $_POST['sphone'];


	include 'config.php';

	$sql = "UPDATE student SET sname = '{$sname}', saddress = '{$saddress}', sclass = '{$sclass}', sphone = '{$sphone}' WHERE sid = {$stu_id}";
	$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

	header("location: http://localhost/crudphp/index.php");

	mysqli_close($conn);
?>