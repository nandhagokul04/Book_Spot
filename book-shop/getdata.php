<?php
ob_start();
session_start(); 
include_once('connect.php');
$grade_val=$_POST['grade_val'];
$query_data=mysql_query("select charge from vendortype where vtype='$grade_val'");
$data=mysql_fetch_array($query_data);
echo $data[0];
?>
