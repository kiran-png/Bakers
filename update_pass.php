<?php
$bulk = new MongoDB\Driver\BulkWrite;
$id = $_POST["id"];
//$name = $_POST["name"];
//$mobile = $_POST["mobile"];
//$address = $_POST["address"];
$email = $_POST["email"];
$password = $_POST["password"];
try{
	$bulk->update(['_id' => new MongoDB\BSON\objectid($id)],
		[
			//'name' =>  $name,
			//'mobile' =>  $mobile,
			//'address'=> $address,
			'email' =>  $email,
			'password' =>  $password

		]);
	$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
	$result = $manager->executeBulkWrite('local.user', $bulk);
	header("location:cousm_login.php");
}
catch(MongoDB\Driver\Exception\Exception $e){
	die("error encountered".$e);


	}
	?>

