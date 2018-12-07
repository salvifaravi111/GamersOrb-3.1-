<?php
  include 'config.php';
?>

<?php

$id=$_GET["id"];
$pic="img/keyboard".$_GET["id"]."big.png";


$sql = "SELECT name,description,companyName FROM keyboard WHERE id='$id'";
$query_result = mysqli_query($conn,$sql) or die(mysql_error());

if(mysqli_num_rows($query_result) > 0){

while ($row = mysqli_fetch_array($query_result)){

  $name=$row['name'];
  $des=$row['description'];
  $brand=$row['companyName'];
  
}
}

?>


<html>

 <head>
	<title>KeyboardInfo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/keyboardinfo.css">
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

<div class="KBbig">
<img src=<?php echo $pic; ?> >
</div>


<div class="KBinfo">

<h3>SPACIFICATION >></h3>

<span class="title">Product Code:</span>&nbsp;<span class="description"><?php echo $name; ?></span>
<br><br>
<span class="title">Brand:</span>&nbsp;<span class="description"><?php echo $brand; ?></span>
<br><br>
<span class="title">Description:</span>
<br>

<p><?php echo $des; ?></p>

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