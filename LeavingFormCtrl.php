<?php
require('SessionHandler.php');
require('Connection.php');
$email=$_SESSION['email'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$sex= $_POST['gender'];
$course= $_POST['course'];
$div= $_POST['division'];
$dob=$_POST['dob'];
$application=$_POST['application'];
$ad=$_POST['ad'];
$pd=$_POST['pd'];
$cast=$_POST['cast'];
$subcast=$_POST['subcast'];
$mobileno=$_POST['mobileno'];
$cgpi=$_POST['cgpi'];


$db="leavingform";

$sql = "INSERT INTO $db (email,fname, lname,dob,appdate,admission,passing,cast,subcast,mobile,cgpi,gender,divi,course)
VALUES ('$email','$firstname', '$lastname','$dob','$application','$ad','$pd','$cast','$subcast','$mobileno','$cgpi','$sex','$div','$course')";

if ($conn->query($sql) == 'TRUE')
{
  echo "<script type='text/javascript'>alert('Application Submitted Successfully.')</script>";
  header("Refresh: 0.5;url=Logout.php");
}
else
{    echo "Error: " . $sql . "<br>" . $conn->error;
}



$target_dir = "uploads/".$email."/";
if (!file_exists("uploads/".$email."/"))
	mkdir('uploads/'.$email."/", 0777, true);

$Signature=$target_dir."Signature.jpg";
move_uploaded_file($_FILES["Signature"]["tmp_name"],$Signature);

$Marksheet=$target_dir."Marksheet.jpg";
move_uploaded_file($_FILES["Marksheet"]["tmp_name"],$Marksheet);

$PassingCertificate=$target_dir."PassingCertificate.jpg";
move_uploaded_file($_FILES["PassingCertificate"]["tmp_name"],$PassingCertificate);

$NationalityProof=$target_dir."NationalityProof.jpg";
move_uploaded_file($_FILES["NationalityProof"]["tmp_name"],$NationalityProof);

$PreviousLeaving=$target_dir."PreviousLeaving.jpg";
move_uploaded_file($_FILES["PreviousLeaving"]["tmp_name"],$PreviousLeaving);

$conn->close();


?>
