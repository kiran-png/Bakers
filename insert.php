<?php
 $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
 // echo "Connection to database successfully\n";
  $bulk = new MongoDB\Driver\BulkWrite;
 //$db = $mongo->local;
 //$collection = $mongo->user;
if ($_POST) {
 	
$name =$_POST['name'];
$mobile =$_POST['mobile'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];

 		//echo $email;
 		$doc = ['name'=> $name, 'mobile'=> $mobile, 'address' => $address, 'email' => $email, 'password' => $password];
 		$bulk-> insert($doc);
 		$mng->executeBulkWrite('local.user',$bulk);
 		echo "New record created successfully";
 		 $_SESSION['user_name'] = $name;
 		 header("Location:"."cousm_login.php");

echo "<br><br>";
echo "$name";
echo "<br>";
 echo "$mobile";
 echo "<br>";
 echo "$address";
 echo "<br>";
 echo "$email";
 echo "<br>";
 echo "$password";
 echo "<br>";

 		}
 else
 {
 	echo "no data store";
 }

?>