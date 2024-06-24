<?php

$countryId = isset($_POST['countryId'])  ? $_POST['countryId'] : 0;
$stateId = isset($_POST['stateId'])  ? $_POST['stateId'] : 0;
$command = isset($_POST['get'])  ? $_POST['get'] : "";

switch($command){
case "cname":
$statement = "SELECT id, cname FROM ctable";
break;
case "tableno":
$statement = "SELECT id, tableno FROM ctable WHERE country_id=".(int)countryId;
break;

default:
break;
}

$sth = $dbh->prepare($statement);
$sth->execute();
$result = $sth->fetchAll();

echo json_encode($result);
exit();

?>