<?php
	include 'config.php';
?>


<html>
<body>

<?php

$uname=$_POST["username"];
$name=$_POST["fname"];
$lname=$_POST["lname"];
$pass=$_POST["password"];
$mail=$_POST["email"];


$sql = "INSERT INTO user (username,name,password,email) VALUES('$uname','$name','$pass','$mail')";

if($conn->query($sql) === TRUE){

		header("Location: home.html");

}else{

	echo "This username or email is already taken,please try again..";
	
}

?>

</body>
</html>

<?php
	include 'close.php';
?>