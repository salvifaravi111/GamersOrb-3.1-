<?php
	include 'config.php';
?>


<html>

	<head>
		<title>News</title>
		<meta charset="utf-8">
	    <link rel="stylesheet" href="css/newsall.css">
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

			<h3 id="top">News</h3>
		<ul class="nshow">

			<?php


$sql = "SELECT header FROM news";

$query_result = mysqli_query($conn,$sql) or die(mysql_error());

if(mysqli_num_rows($query_result) > 0){

while ($row = mysqli_fetch_array($query_result)){

	?>			
			<li><a href="news.php?id=1"><?php echo $row['header']; ?></a></li>
	<?php
	
}
}

?>

		</ul>


		</div>
	</body>

</html>




<?php
	include 'close.php';
?>