<!DOCTYPE html>
<html lang="en">

<head>
    <title>VESIT</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" />
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"> </script>
    <script>
        $(document).ready(function () {
            $('#validateform').bootstrapValidator({
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    
                    course: {
                        validators: {
                            notEmpty: {
                                message: 'Course is required and cannot be empty'
                            }
                        }
                    },

                    division: {
                        validators: {
                            notEmpty: {
                                message: 'Division is required and cannot be empty'
                            }
                        }
                    },                    
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
    <div class="example3">
        <nav class="navbar navbar-default  navbar-custom navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand"><img src="Logo.png" style="height:50px;" alt="VESIT">
                </div>
                </a>
                <div id="navbar3" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="Logout.php" class=""><span class="glyphicon glyphicon-log-in"></span> LOG-OUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
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
                                    <center>
                                        <h1>LC-APPLICANTS LIST </h1>
                                    </center>
                                    <form id="validateform" name="signup" method="post" action="ClerkCtrl.php">

                                        <div class="form-group">
                                            <select name="division" class="form-control">
                                                <option value="" selected>Select Division</option>
                                                <option value="fe">F.E</option>
                                                <option value="se">S.E</option>
                                                <option value="te">T.E</option>
                                                <option value="be">B.E</option>
                                            </select>

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
                                                <button type="submit" class="btn btn-success btn-block" name="submitButton">SUBMIT</button>
                                            </div>

                                            <div class="form-group">
                                                <label><a href="Login.php">GO BACK<a></label>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <br>
        </div>
    </div>
    <?php include('Footer.html');?>
</body>

</html>