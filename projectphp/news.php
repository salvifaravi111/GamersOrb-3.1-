
<?php
	include 'config.php';
?>


<?php

$id=$_GET["id"];

$sql = "SELECT header,dt,full,link FROM news WHERE id='$id'";

$query_result = mysqli_query($conn,$sql) or die(mysql_error());

if(mysqli_num_rows($query_result) > 0){

while ($row = mysqli_fetch_array($query_result)){

	$header=$row['header'];
	$date=$row['dt'];
	$des=$row['full'];
    $link=$row['link'];
	
}
}


?>

<html>

 <head>
	<title>GamersOrb</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/news.css">
 </head>

<body>

<div class="wrap">


<div id="homelogo">
<img alt="GAMERS ORB" src="img/gorb2.png">
</div>

<form>
  <input type="text" name="search" placeholder="Search..">
</form>

<div id="menubar">

<ul>
   <li><a href="HomePage.html"><img border="0" alt="HOME" src="img/home2.png"></a></li>
   <li class="dropdown">
    <a href="#" class="dropbtn">Categories</a>
    <div class="dropdown-content">
      <a href="ActionGamePage.html">Action</a>
      <a href="#">RPG</a>
      <a href="#">Sports</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Gaming Accessories</a>
    <div class="dropdown-content">
      <a href="keyboardpage.html">Keyboard</a>
      <a href="#">Mouse</a>
      <a href="#">HeadSet</a>
    </div>
  </li>

   <li><a href="#">News</a></li>
</ul>

</div>

</div>

	<div class="wrap3">
		<div id="head2">
			<h1><?php echo $header; ?></h1>
		</div>
		<div id="head1">
			<h6><?php echo $date; ?></h6>
		</div>
		<?php echo $des; ?>

		<div id="video">
			<iframe width="560" height="315" src=<?php echo $link; ?> frameborder="0" allowfullscreen></iframe>
		</div>

	</div>

<footer>
<button class="BtoT" onclick="topFunction()">Back To Top</button>  
</footer>


<script type="text/javascript">
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>


<?php
	include 'close.php';
?>