<?php
require_once "connect.php";
$msg = "";
if(isset($_REQUEST['btnSubmit'])) 
	{
		$uname = $_REQUEST['uname'];
		$mobile = $_REQUEST['mobile'];
		$email = $_REQUEST['email'];
		$address = $_REQUEST['address'];
		$reason = $_REQUEST['reason'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		$query = "insert into user (uname,mobile,email,address,reason,username,password) values ('$uname','$mobile','$email','$address','$reason','$username','$password')";
		if(mysql_query($query))
		{
		echo '<script language="javascript">';
		echo 'alert("Registered Successfully!")';
		echo '</script>';
		} 
		else 
		{
		echo '<script language="javascript">';
		echo 'alert("Unable to Save!")';
		echo '</script>';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Canteen</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>



<div id="wrapper">
	<!-- start header -->
	<header>
			
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" width="199" height="52" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <?php include "home-menu.php"; ?>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
    
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">User Registration</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" class="register-form" method="post">
			<h2>User Registration</h2>
			<hr class="colorgraph">

			<div class="form-group">
				<input type="text" name="uname" class="form-control input-lg" placeholder="Name" required>
			</div>
            <div class="form-group">
				<input type="text" name="mobile" class="form-control input-lg" placeholder="Mobile" required maxlength="10" pattern="^[6-9][0-9]{9}$">
			</div>
            <div class="form-group">
				<input type="email" name="email" class="form-control input-lg" placeholder="Email" required>
			</div>
            <div class="form-group">
				<input type="text" name="address" class="form-control input-lg" placeholder="Address" required>
			</div>
            <div class="form-group">
				<select class="form-control input-lg" name="reason" required>
                	<option value="">Choose Reason for Registration </option>
                    <option value="Marriage">Marriage </option>
                    <option value="Birthday">Birthday</option>
                    <option value="Engagement">Engagement </option>
                    <option value="Others">Others </option>
                </select>
			</div>
            <div class="form-group">
				<input type="text" name="username" class="form-control input-lg" placeholder="Username" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control input-lg" name="password" placeholder="Password" required>
			</div>

			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" name="btnSubmit"></div>
			<div class="col-xs-12 col-md-6">If you have an account? <a href="user-login.php">Login</a></div>
			</div>
		</form>
	</div>
</div>

</div>
	</section>

	<footer>
		<?php include "footer.php" ?>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="plugins/flexslider/flexslider.config.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

	
</body>
</html>