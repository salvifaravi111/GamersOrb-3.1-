<?php
	include 'config.php';
?>


<?php

$mail=$_POST["mail"];
$pass=$_POST["pass"];
$homeurl="home2.php";


$sql = "SELECT username FROM user WHERE email='$mail' AND password='$pass'";

$query_result = mysqli_query($conn,$sql) or die(mysql_error());

if(mysqli_num_rows($query_result) > 0){

while ($row = mysqli_fetch_array($query_result)){

	$uname=$row['username'];
	
}

header( "Location: $homeurl?username=$uname" );

}


?>

<?php
	include 'close.php';
?>