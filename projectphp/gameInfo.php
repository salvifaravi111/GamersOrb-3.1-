<?php
  include 'config.php';
?>



<?php


$uname=$_GET["username"];
$id=$_GET["gameid"];
$shot1="img/".$id."shot1.jpg";
$shot2="img/".$id."shot2.jpg";
$shot3="img/".$id."shot3.jpg";
$headimg="img/".$id.".jpg";

$sql = "SELECT name,description,descriptiontop,updateDate,updateName,updateDes,review,minreq,recreq,link FROM gameinfo WHERE gameid='$id'";

$query_result = mysqli_query($conn,$sql) or die(mysql_error());

if(mysqli_num_rows($query_result) > 0){

while ($row = mysqli_fetch_array($query_result)){

  $gname=$row['name'];
  $des=$row['description'];
  $tdes=$row['descriptiontop'];
  $upD=$row['updateDate'];
  $upN=$row['updateName'];
  $upDes=$row['updateDes'];
  $rev=$row['review'];
  $min=$row['minreq'];
  $reco=$row['recreq'];
  $link=$row['link'];
  
}
}

$urev="";

$sql = "SELECT review FROM gamereview WHERE gameid='$id'";
$query_result = mysqli_query($conn,$sql) or die(mysql_error());

if(mysqli_num_rows($query_result) > 0){

while ($row = mysqli_fetch_array($query_result)){

  $urev.=$row['review'];
  
}
}



?>



<html>

 <head>
	<title><?php echo $gname; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/gameinfo.css">
 </head>

 <body>

<div class="wrap">

<div class='loginbar'>
<form>
  <input type="text" name="search" placeholder="Search..">
</form>	
</div>

<div id="homebtn">
<a href="#"><img border="0" alt="HOME" src="img/gorb.png"></a>
</div>


<div id="menubar">
<ul>
  <!--
	<li><a href="#"><img border="0" alt="HOME" src="img/gorb.png"></a></li>
-->
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


<h2 id="gamename"><?php echo $gname; ?></h2>

<button id="add">ADD TO WISHLIST</button>

<div class="slideshow">
<ul>

<li><button class="arrowbtnleft" onclick="plusDivs(-1)">&#10094;</button></li>
<li><img class="scrnshots" src=<?php echo $shot1; ?> >
<img class="scrnshots" src=<?php echo $shot2; ?> >
<img class="scrnshots" src=<?php echo $shot3; ?> >
</li>
<li><button class="arrowbtnright" onclick="plusDivs(1)">&#10095;</button></li>

</ul>

<div class="shortdes">
<img src=<?php echo $headimg; ?> >
<p>
<?php echo $tdes; ?>
</p>
</div>

</div>


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("scrnshots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>



<div id="recentup">
<h2>RECENT UPDATES...</h2>
<p><?php echo $upD; ?> </br>
<h1><?php echo $upN; ?></h1>
<?php echo $upDes; ?>
</p>
</div>

<div id="review">
<h2>REVIEWS...</h2>
<P>
<?php echo $rev; ?>
</P>
</div>

<div id="about">
<h2>ABOUT THIS GAME</h2>
<p><?php echo $des; ?></p>
</div>

<div class="requirements">
<h2>SYSTEM REQUIREMENTS</h2>

<div class="mini">
<h4>MINIMUM:</h4><br>
<?php echo $min; ?>
</div>

<div class="maxi">
<h4>RECOMMENDED:</h4><br>
<?php echo $reco; ?>
</div>

</div>

<div class="cus_review">
<h2>CUSTOMER REVIEW:</h2>
<h3>Post Your Review:</h3>
<form action="http://localhost/projectphp/reviewinsert.php" method="post">
  <input type="checkbox" name="like" value="RECOMMENDED"> RECOMMENDED
  <input type="checkbox" name="like" value="NOT RECOMMENDED"> NOT RECOMMENDED<br>
   <input type="text" name="review" ><br>
    <div id="hidit">
      <input type="text" name="id" value=<?php echo $id; ?> >
      <input type="text" name="user" value=<?php echo $uname; ?> >
    </div>
  <input type="submit" value="Submit">
</form>
</div>

<div class="rev">
<?php echo $urev; ?>
</div>


</div>
</body>

<footer>
<div id="foot">
<ul>
<li><a href="#">TERMS OF USE</a></li>
<li><a href="#">ABOUT US</a></li>
<li><a href="#">PRIVACY POLICY</a></li>
<li><a href="#">SUPPORT</a></li>
</ul>
<div id='footlogo'><img src="img/gorbs.png"></div>

<p id="cpyright">© 2017</br>All copyrights and trademarks are the property of their respective owners.</p>

<button class="BtoT" onclick="topFunction()">Back To Top</button> 
<script type="text/javascript">
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


</div>
</footer>

</html>

<?php
  include 'close.php';
?>