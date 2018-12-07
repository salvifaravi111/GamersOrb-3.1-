
<?php
	include 'config.php';
?>


<?php

$id=$_GET["gameid"];
$shot1="img/".$id."shot1.jpg";
$shot2="img/".$id."shot2.jpg";


$sql = "SELECT name,description,minreq,recreq,link FROM gameinfo WHERE gameid='$id'";

$query_result = mysqli_query($conn,$sql) or die(mysql_error());

if(mysqli_num_rows($query_result) > 0){

while ($row = mysqli_fetch_array($query_result)){

	$gname=$row['name'];
	$des=$row['description'];
	$min=$row['minreq'];
	$reco=$row['recreq'];
  $link=$row['link'];
	
}
}

?>

<html>

 <head>
	<title><?php echo $gname; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/actiongameinfo.css">
 </head>

<body>

<div class="wrap">


<div id="homelogo">
<img alt="GAMERS ORB" src="img/gorb2.png">
</div>

<form>
  <input type="text" name="search" placeholder="Search..">
</form>

<div class="menubar">

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

<h2><?php echo $gname; ?></h2>

<div class="menubar">

<ul>
  <li><a href="#description">Description</a></li>
  <li><a href="#require">System Requirements</a></li>
  <li><a href="#shots">ScreenShots</a></li>
  <li><a href="#gplay">GamePlay</a></li>
</ul>

</div>

<h2 id="description">Description:</h2>
<p class="infos"><?php echo $des; ?></p>
<br><br>

<h2 id="require">System Requirements:</h2>
<p class="infos">The minimum requirements for 720p and 30fps at low settings:<br><?php echo $min; ?></p>
      <p class="infos">The recommended requirements for 1080p and 60fps at high settings:<br><?php echo $reco; ?></p>
<br><br>

<h2 id="shots">ScreenShots:</h2>

<img class="ss" src=<?php echo $shot1; ?> >
<br><br>

<img class="ss" src=<?php echo $shot2; ?> >
<br><br>

<h2 id="gplay">GamePlay:</h2>

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