

<html>

 <head>
	<title>ActionGames</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/actiongamepage.css">
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


<div class="gamethumb">
<?php
$goto="gameInfo.php?username=".$_GET["username"]."&gameid=2";
?>
<a href=<?php echo $goto; ?> ><img src="img/somthumb.png">
<h4>Middle Earth:Shadow of Mordor</h4></a>
</div>

<div class="gamethumb">
<a href="#"><img src="img/witcher3thumb.jpg">
<h4>The Witcher 3:Wild Hunt</h4></a>
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
