
<!DOCTYPE html>
<html lang="en">
<head>
	<title>VESIT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	<style>
	.cards{
		background-color:white !important;
		text-align: center !important;
		width:100% !important;
		height:100% !important;
		display: inline-block !important;
		transition: all .3s ease-in-out !important;
	}
	#c1{
		box-shadow: 0 4px 50px 0 lightblue,0 6px 20px 0 #777;
	}
	#c2{
		box-shadow:0 4px 50px 0 pink,0 6px 20px 0 #777;
	}
	.btn-custom{
		background-color:pink;
	}
  </style>
</head>
<body>
<?php include('IndexHeader.html');?>

<?php
require('Connection.php');
$table="leavingform";
echo " <div class='container'><div class='row'>";
$sql = "SELECT * FROM  $table ";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
		echo"
			<div class='col-sm-4'>
				<div class='cards' id='c1'>
					<div class='row'>
						<div class='col-sm-12'>
							StudentName:<b>".$row['fname']." ".$row['lname']."</b>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							Email:<b>" . $row['email']."</b>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							MoblieNO:<b>" . $row['mobile']."</b>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							DOB :<b>" . $row['dob']."</b>
						</div>
					</div>	
					<div class='row'>
						<div class='col-sm-12'>
							Admission date:<b>" . $row['admission']."</b>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							Application date:<b>" . $row['appdate']."</b>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							Passing year:<b>" . $row['passing']."</b>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							Cast:<b>" . $row['cast']."</b>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							Subcast:<b>" . $row['subcast']."</b>
						</div>
					</div>
                    <div class='row'>
						<div class='col-sm-12'>
							Gender:<b>" . $row['gender']."</b>
						</div>
					</div>
                    <div class='row'>
						<div class='col-sm-12'>
							Course:<b>" . $row['course']."</b>
						</div>
					</div>
                    <div class='row'>
						<div class='col-sm-12'>
							Division:<b>" . $row['divi']."</b>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							<form action='AdminControl.php' method='post'>
								<center>
									<input type='text' name='signature'  placeholder='Signature Here...''>
									<br><br>
									<input type='textarea' name='comment'  placeholder='Comment Here...''>
								</center>	
								<br>
								<input type='submit' name='button'  class='btn btn-custom' value='Accept'>
								<input type='submit' name='button'  class='btn btn-custom' value='Reject'>
								<input type='hidden'  name='applicant' value='".$row['email']."'>
							</form>
							<br>
						</div>
					</div>
				</div>
			</div>
		";
    }
}
else
{
    echo "<center>No Application</center>";
}
echo "</div></div>";
$conn->close();
?>
<br><br>
<br><br><br><br>
<?php include('Footer.html');?>

</body>
</html>
