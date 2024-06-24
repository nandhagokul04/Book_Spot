<?php
require_once "connect.php";
session_start(); 
	$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "0";

if(isset($_REQUEST['btnSubmit'])) 
{
	$bookname = $_REQUEST['bookname'];
		$author = $_REQUEST['author'];
		$price = $_REQUEST['price'];
		$id = $_REQUEST['id'];
	$query1 = "update books set bookname='$bookname',author='$author',price='$price' where id =  '$id'";

		
		if(mysql_query($query1))
		{
            echo '<script language="javascript">';
            echo 'alert("Book Updated Successfully!")';
            echo '</script>';
            header('Refresh: 3; URL = my-book.php');
            } 
            else 
            {
            echo '<script language="javascript">';
            echo 'alert("Unable to Update!")';
            echo '</script>';
		}
}
$query = "select * from books where id = '$id'";
$data = mysql_query($query);
$rec = mysql_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Book Shop</title>
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
                    <?php include "seller-menu.php" ?>
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
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Sell Book Edit</li>
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
			<h2>Sell Book Edit</h2>
			<hr class="colorgraph">

			<div class="form-group">
				<input type="text" name="bookname" class="form-control input-lg" placeholder="Book Name" required  value="<?php echo $rec['bookname']; ?>">
			</div>
			
            <div class="form-group">
				<input type="text" name="author" class="form-control input-lg" placeholder="Author" required  value="<?php echo $rec['author']; ?>">
			</div>
            
			<div class="form-group">
				<input type="text" name="price" class="form-control input-lg" placeholder="Price" required  value="<?php echo $rec['price']; ?>">
			</div>
			
           <input type="text" name="id" class="form-control input-lg" placeholder="Price" required  value="<?php echo $rec['id']; ?>" style="display:none">
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Update" class="btn btn-primary btn-block btn-lg" name="btnSubmit"></div>
			
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