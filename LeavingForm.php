
<!DOCTYPE html>
<html lang="en">
<head>
  <title>VESIT</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"> </script>
  <script>
	$(document).ready(function() {
    $('#validateform').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstname: {
                validators: {
                    notEmpty: {
                        message: 'First name is required and cannot be empty'
                    }
                }
            },
           lastname: {
                validators: {
                    notEmpty: {
                        message: 'Last name is required and cannot be empty'
                    }
                }
            },

			gender:{
				validators: {
                    notEmpty: {
                        message: 'Gender is required and cannot be empty'
                    }
				}
			},
			course:{
				validators: {
                    notEmpty: {
                        message: 'Course is required and cannot be empty'
                    }
				}
			},

      cast:{
				validators: {
                    notEmpty: {
                        message: 'Course is required and cannot be empty'
                    }
				}
			},

      subcast:{
				validators: {
                    notEmpty: {
                        message: 'Course is required and cannot be empty'
                    }
				}
			},

			division:{
				validators: {
                    notEmpty: {
                        message: 'Division is required and cannot be empty'
                    }
				}
			},
			dob:{
				validators: {
                    notEmpty: {
                        message: 'Date Of Birth is required and cannot be empty'
                    }
				}
			},
      application:{
				validators: {
                    notEmpty: {
                        message: 'Date Of application is required and cannot be empty'
                    }
				}
			},
      ad:{
				validators: {
                    notEmpty: {
                        message: 'Date Of Admission is required and cannot be empty'
                    }
				}
			},
      pd:{
				validators: {
                    notEmpty: {
                        message: 'Date Of Passing is required and cannot be empty'
                    }
				}
			},
			mobileno:{
				validators: {
                    notEmpty: {
                        message: 'Mobile Number is required and cannot be empty'
                    }
				}
			},

			cgpi:{
				validators: {
                    notEmpty: {
                        message: 'CGPI is required and cannot be empty'
                    }
				}
			}

        }
    });
});
</script>
  <style>
  .example3 .navbar-brand {
  height: 80px;
}
.example3 .nav >li >a {
  padding-top: 30px;
  padding-bottom: 30px;
}
.navbar-default .navbar-nav>li>a:hover {
    color: #61CDF5 !important;
	border-bottom:1px solid #61CDF5;
}
.example3 .navbar-toggle {
  padding: 10px;
  margin: 25px 15px 25px 0;
}
.navbar-custom{
	background-color:white;
}
.navbar-default .navbar-nav>li>.contact:hover{
	color:gold !important;
	border-bottom:1px solid gold;
}
.navbar-default .navbar-nav>li>.about-us:hover{
	color:lightgreen !important;
	border-bottom:1px solid lightgreen;
}
.navbar-default .navbar-nav>li>.chooseus:hover{
	color:red !important;
	border-bottom:1px solid red;
}
  </style>
</head>
<body>
<?php include('IndexHeader.html');?>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<div class="jumbotron" style="background-color:#ffc266;color:white">
<div class="row">
<div class="col-sm-12">
<div class="container-fluid bg-3 text-center">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<center><h1>LC-APPLICATION FORM</h1></center>
		<form id="validateform" name="signup" method="post" action="LeavingFormCtrl.php" enctype="multipart/form-data">

    <div class="form-group">
		<input name="application" id="application" class="form-control" placeholder="Enter Application date" onfocus="(this.type='date')" onfocusout="(this.type='text')" >
		</div>


    <div class="form-group">
    <input type="text" class="form-control" name="firstname" placeholder="Enter your First Name">
		</div>

		<div class="form-group">
		<input type="text" class="form-control" name="lastname" placeholder="Enter your Last Name">
		</div>

    <div class="form-group">
		<input name="dob" id="dob" class="form-control" placeholder="Enter your DOB" onfocus="(this.type='date')" onfocusout="(this.type='text')" >
		</div>

    <div class="form-group">
		<input type="text" minlength="10" pattern="[0-9]{10}" class="form-control" name="mobileno" class="textsize" id="mobileno" placeholder="Enter your Mobile Number eg.,+91" >
		</div>

    <div class="form-group">
		<select name="course" class="form-control">
        <option value="" selected>Select Course</option>
        <option value="Comp">Computer Engineering</option>
        <option value="Inft">Information Technology</option>
        <option value="Extr">Electonics</option>
        <option value="Extc">Electronics and Telecommunication</option>
        <option value="Instru">Instrumentation</option>
		<option value="HS">Humanities and Science</option>
        </select>
		</div>

    <div class="form-group">
		<input name="ad" id="ad" class="form-control" placeholder="Enter Admission date" onfocus="(this.type='date')" onfocusout="(this.type='text')" >
		</div>

    <div class="form-group">
		<input name="pd" id="pd" class="form-control" placeholder="Enter Passing date" onfocus="(this.type='date')" onfocusout="(this.type='text')" >
		</div>

		<div class="form-group">
		<select name="gender" class="form-control">
        <option value="" selected>Select your Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
		</select>
		</div>

		<div class="form-group">
		<select name="division" class="form-control">
        <option value="" selected>Select Division</option>
        <option value="fe">F.E</option>
        <option value="se">S.E</option>
        <option value="te">T.E</option>
        <option value="be">B.E</option>
        </select>
		</div>

    <div class="form-group">
		<input type="number" class="form-control" name="cgpi" min="0" step="1" max="10" placeholder="Enter your CGPI">
		</div>

    <div class="form-group">
		<select name="cast" class="form-control">
        <option value="" selected>Select your Cast</option>
        <option value="General">General</option>
        <option value="OBC">OBC</option>
		</select>
		</div>

    <div class="form-group">
		<select name="subcast" class="form-control">
        <option value="" selected>Select your Sub-cast</option>
        <option value="Hindu">Hindu</option>
        <option value="Others">Others</option>
		</select>
		</div>


    <div class="form-group">
      <label>Upload signature</label>
    <input type="file" name="Signature" id="Signature">
    </div>

    <div class="form-group">
      <label>Upload Marksheet</label>
        <input type="file" name="Marksheet" id="Marksheet">
  	</div>

    <div class="form-group">
      <label>Upload PassingCertificate</label>

        <input type="file" name="PassingCertificate" id="PassingCertificate">
    </div>

    <div class="form-group">
        <label>Upload NationalityProof</label>
        <input type="file" name="NationalityProof" id="NationalityProof">
    </div>

    <div class="form-group">
        <label>Upload PreviousLeaving</label>
        <input type="file" name="PreviousLeaving" id="PreviousLeaving">
    </div>

    <div class="form-group">
		<button type="submit" class="btn btn-success btn-block" name="submitButton">SUBMIT</button>
		</div>

		<div class="form-group">
		<label><a href="Login.php">GO BACK<a></label>
		</div>
		</form>
		<div class="col-sm-4"></div>
		</div>
	</div>
	</div>
</div>
</div>
</div>
</div>
</div>
<hr>
<?php include('Footer.html');?>
</body>
</html>
