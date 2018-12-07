

<?php

$goto="ActionGamePage.php?username=".$_GET["username"];

?>

<html>

 <head>
	<title>GamersOrb</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/homev4.css">
 </head>

 <body>

<div class='wrap'>

<div class='loginbar'>
<form>
  <input type="text" name="search" placeholder="Search..">
</form>
<button class='login' onclick="openPopupMenu()">LOG OUT</button>
</div>

<h4 id="uname">
LOGGED IN AS:
<?php echo $_GET["username"]; 
?>
</h4>


<div class='pop'>

<div id='pop2'>

<button class='closeee' onclick="closeit()">X</button>

<form id='myPopup' action="http://localhost/projectphp/loginfhome.php" method="post">
 <input type="text" name="mail" placeholder="EMAIL">
 <br>
 <input type="text" name="pass" placeholder="PASSWORD">
 <br>
 <input type="submit">
</form>

</div>
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
      <a href=<?php echo $goto; ?> >Action</a>
      <a href="#">RPG</a>
      <a href="#">Sports</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Gaming Accessories</a>
    <div class="dropdown-content">
      <a href="keyboardpage.php">Keyboard</a>
      <a href="#">Mouse</a>
      <a href="#">HeadSet</a>
    </div>
  </li>

   <li><a href="newsall.php">News</a></li>
</ul>
</div>

<div id="upcoming">
<h1>UPCOMING</h1>
</div>

<div id="upcomingimg">
<div class="slide">
<a href="#">
<img alt="GOD OF WAR:4" src="img/new3.png">
</a>
</div>

<div class="slide">
<a href="https://www.youtube.com/watch?v=cUuKIpCM2o0" target="_blank">
<img alt="Assassin's Creed Origins" src="img/new2.png">
</a>
</div>

<div class="slide">
<a href='getupinfo.php?gameid=1'>
<img alt="Need For Speed:Payback" src="img/new1.png">
</a>
</div>
</div>

<script type="text/javascript" src="js/upcmgslidesrpt.js"></script>

<div id="bar">
<h3>Top Stories</h3>
</div>

<div class="topstory">
  <img alt="nana" src="img/gtatop.jpg" class="topimg">
  <div class="topw">
  <h3>GTA 5: Liberty City Mod Canceled as OpenIV Restarts</h3>
  <p>OpenIV is back in business, but the team's major project has been halted.</p>
  <a href="#"><h4>Read More >></h4></a>
  </div>
</div>

<div class="topstory">
  <img alt="nana" src="img/actop.jpg" class="topimg">
  <div class="topw">
  <h3>The Assassin's Creed TV Series Is an Anime</h3>
  <p>The Animus is going anime when Assassin's Creed heads to TV.</p>
  <a href="#"><h4>Read More >></h4></a>
  </div>
</div>

<div class="topstory">
  <img alt="nana" src="img/owtop.jpg" class="topimg">
  <div class="topw">
  <h3>Overwatch Officially Teases Long-Rumored Character, Doomfist</h3>
  <p>when will we meet Akande Ogundimu?</p>
  <a href="news.php?id=1"><h4>Read More >></h4></a>
  </div>
</div>

<button class="bnormal">Load More Stories</button>  

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

function openPopupMenu(){

  var popup = document.getElementById("pop2");
    popup.classList.toggle("show");

}

function closeit(){

   var popup = document.getElementById("pop2");
    popup.classList.toggle("show");

}

function signup(){

  document.location.href = "signUp.html";

}

</script>
</div>
</footer>

 </html>