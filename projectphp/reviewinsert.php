
<?php
	include 'config.php';
?>

<?php

$like=$_POST["like"];
$currev=$_POST["review"];
$id=$_POST["id"];
$name=$_POST["user"];

$rev="<br><ul><li><h4>".$name."</h4></li><li><p><h3>".$like."</h3>".$currev."</p></li></ul>";

$sql = "INSERT INTO gamereview (gameid,review) VALUES('$id','$rev')";

if($conn->query($sql) === TRUE){

		header("Location: gameInfo.php?username=$name&gameid=$id");

}else{

	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	
}	


?>

<?php
	include 'close.php';
?>