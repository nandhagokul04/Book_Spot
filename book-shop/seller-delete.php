<?php 
require_once "connect.php";
$msg = "";
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "0";
$query = "delete from seller where id=".$id;
if(mysql_query($query)) {
header("location:seller-list.php");
} else {
echo "unable to delete!";
}
?>