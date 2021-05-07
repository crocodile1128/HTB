<?php

$host="localhost";
$port=3306;
$user="passwordM";
$password="hWjSh812jDn1asd./213-91!#(";
$dbname="bread";
$method = "";
$con = new mysqli($host, $user, $password, $dbname, $port) or die ('Could not connect to the database server' . mysqli_connect_error());
if(isset($_REQUEST['method'])){
	$method = $_REQUEST['method'];
}
echo $method;
if($method == "select"){
	$sql = "SELECT aes_key FROM ".$_REQUEST['table']." WHERE account='".$_REQUEST['username']."'";
	$results = $con->query($sql);

	echo var_dump(mysqli_fetch_all($results,MYSQLI_ASSOC));	
}

else{
	echo "Bad Request";
}

