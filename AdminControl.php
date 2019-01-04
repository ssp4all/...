<?php

// require('SessionHandler.php');
require('Connection.php');

$applicant=$_POST['applicant'];
$signature=$_POST['signature'];
$comment=$_POST['comment'];

$table="leavingform";

$sql = "UPDATE $table SET comment='$comment' and signature='$signature' WHERE email='$applicant'";
if ($conn->query($sql) == TRUE)
{
	echo "<script type='text/javascript'>alert('Application Submitted Successfully.')</script>";
	header("Refresh: 0.5;url=AdminHome.php");
}
else
{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
