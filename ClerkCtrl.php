<?php
require('SessionHandler.php');
require('Connection.php');
$email=$_SESSION['email'];

$signature=$_POST['signature'];
$comment=$_POST['comment'];


$db="leavingform";

$sql = "UPDATE $db(signature,comment ) WHERE email=$email
VALUES ('$signature','$comment')";

if ($conn->query($sql) == TRUE)
{
  echo "<script type='text/javascript'>alert('Application Submitted Successfully.')</script>";
  header("Refresh: 0.5;url=Logout.php");
}
else
{
      echo "Error: " . $sql . "<br>" . $conn->error;
}

  $conn->close();

?>
