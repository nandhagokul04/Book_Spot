<?php
ob_start();
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "0";
session_start(); 
$username=$_SESSION['username'];
include('connect.php');
error_reporting(E_ERROR | E_PARSE);
$query = "select * from books where id='$id'";
$data = mysql_query($query);
?>

<?php
//session_start(); 
require_once "connect.php";
$msg = "";
if(isset($_REQUEST['btnSubmit'])) 
	{
		$bookname = $_REQUEST['bookname'];
		$author = $_REQUEST['author'];
		$price = $_REQUEST['price'];
		$selluser = $_REQUEST['selluser'];
		
		$bname = $_REQUEST['bname'];
		$mobile = $_REQUEST['mobile'];
		$email = $_REQUEST['email'];
		$baddress = $_REQUEST['baddress'];
		$qty = $_REQUEST['qty'];
		$total = $_REQUEST['total'];
		$username=$_SESSION['username'];
		date_default_timezone_set('Asia/Kolkata');
$cdate = date('d-m-Y H:i');
		

		$query = "insert into bookorder (bookname,author,price,selluser,bname,mobile,email,baddress,qty,total,username,orderdate) values ('$bookname','$author','$price','$selluser','$bname','$mobile','$email','$baddress','$qty','$total','$username','$cdate')";
		if(mysql_query($query))
		{
		echo '<script language="javascript">';
		echo 'alert("Your Order Confirmed Successfully!")';
		echo '</script>';
		header('Refresh: 1; URL = booked-canteen.php');
		} 
		else 
		{
		echo '<script language="javascript">';
		echo 'alert("Unable to Book!")';
		echo '</script>';
		}
	}
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
<script language="javascript">
                function addNumbers()
                {
                        var val1 = parseInt(document.getElementById("price").value);
                        var val2 = parseInt(document.getElementById("nplates").value);
                        var ansD = document.getElementById("total");
                        ansD.value = val1 * val2;
                }
        </script>
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
                    <?php include "buyer-menu.php"; ?>
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
					<li class="active">View Books</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
    	
        
        
        <section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<article>
                
                        <?php while($rec = mysql_fetch_array($data)) { ?>

						<div class="post-image">
							<div class="post-heading">
								<h3><?php echo $cname = $rec['cname']; ?></h3> 
							</div>
							<img src="<?php echo $rec['path'];?>" width="300" height="450">
						</div>

				</article>
			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					<h5 class="widgetheading">Details</h5>
					<ul class="cat">
					<li><i class="fa fa-angle-right"></i> Book Name : <?php echo $rec['bookname']; ?></span></li>
						<li><i class="fa fa-angle-right"></i> Author : <?php echo $rec['author']; ?></span></li>
                        <li><i class="fa fa-angle-right"></i> Price : <?php echo $rec['price']; ?></span></li>
						
					</ul>
				</div>
			
    			<form role="form" class="register-form" method="post"> 
               

               <input type="text" value="<?php echo $rec['bookname']; ?>" name="bookname" class="form-control input-lg" style="display:none">
			   <input type="text" value="<?php echo $rec['author']; ?>" name="author" class="form-control input-lg" style="display:none">
			   <input type="text" value="<?php echo $rec['price']; ?>" name="price" class="form-control input-lg" style="display:none">
               <input type="text" value="<?php echo $rec['username']; ?>" name="selluser" class="form-control input-lg" style="display:none">
               
              
               <div class="form-group">
				<input type="text" name="bname" class="form-control input-lg" placeholder="Name" required>
			</div>
            <div class="form-group">
				<input type="text" name="mobile" class="form-control input-lg" placeholder="Mobile" required maxlength="10" pattern="^[6-9][0-9]{9}$">
			</div>
            <div class="form-group">
				<input type="email" name="email" class="form-control input-lg" placeholder="Email" required>
			</div>
            <div class="form-group">
				<input type="text" name="baddress" class="form-control input-lg" placeholder="Address" required>
			</div>
           
            <hr>
            <div class="form-group">
            Price
            <input type="text" value="<?php echo $rec['price']; ?>" name="price" id="price" class="form-control input-lg" readonly> <br>
            
             <input type="text" name="qty" id="nplates" class="form-control input-lg"  placeholder="No. of Books"> <br>
             <input type="button" name="Sumbit" value="Calculate" onClick="javascript:addNumbers()" class="btn btn-medium btn-theme"/> <br><br>
             <input type="text" name="total" id="total" class="form-control input-lg"  placeholder="Total" readonly> <br>
             
             
				<input type="text" name="cnumber" class="form-control input-lg" placeholder="Card Number" required maxlength="16"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="edate" class="form-control input-lg" placeholder="Expiry Date" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="eyear" class="form-control input-lg" placeholder="Expiry Year" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="password" name="scode" class="form-control input-lg" placeholder="Security Code" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="3">
			</div>
                <br>
                <input type="submit" value="Confirm Order" class="btn btn-primary btn-block btn-lg" style="width:200px;" name="btnSubmit">
                </form>
				</aside>
             
			</div>
		</div>
	</div>
	</section>
<?php } ?>	
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