<?php
ob_start();
session_start(); 
$username=$_SESSION['username'];
include('connect.php');
error_reporting(E_ERROR | E_PARSE);
$query = "select * from books where username='$username'";
$data = mysql_query($query);
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
					<li class="active">My Book</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
<div class="container">

<div class="row">
    <div class="col-xs-12">
		<table class="table table-hover table-striped" border="1">
                                    <thead>
                                        <th colspan="2">Book Name</th>
                                    	<th>Author</th>
                                    	<th>Price</th>
                                        <th colspan="2">Action</th>
                                    </thead>
                                     <?php while($rec = mysql_fetch_array($data)) { ?>
                                    <tbody>
                                        <tr>
                                        	<td><?php echo $rec['bookname']; ?></td>
                                        	<td><img src="<?php echo $rec['path'];?>" width="100" height="100"></td>
                                        	<td><?php echo $rec['author']; ?></td>
                                            <td><?php echo $rec['price']; ?></td>
                                            <td> <a href="book-edit.php?id=<?php echo $rec['id']; ?>">Edit</a> </td>
											<td> <a onClick="return confirm('Sure to Delete ?')" href="book-delete.php?id=<?php echo $rec['id']; ?>">Delete</a> </td>
                                        </tr>
                                        
                                    </tbody>
                                    <?php } ?>
                                </table>
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