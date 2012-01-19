	<html>
	<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css" />
	<style>
	.description{
	position:absolute;
	left: 20px;
	}
	img
{
	float:left;
	}
	
	.top{
	height:60%;
		
	}
	</style>

	</head>
	<body>
	
	<div id="wrapper">
	<div id="heading">
	    <div id="banner">
		<div id="Left">
		    <h1>Flamingo boeken</h1>
		</div>
		<div id="Right">
		    <a href="login.html">Inloggen</a>
		    <br />
		    <a href="account.html">Account</a>
		    <br />
		    <a href="winkelwagen.html">Winkelwagen</a>									</div>																     </div>
    </div>
	<div id="navigation">
	<p>Dit is de sitemap links van de tekst. <a href="categorie.html">Nederlandse boeken</a><br /> <a href="categorie">Engelse boeken</a><br /> <a href="categorie.html">Duitse boeken</a></p>  
	</div>
	<div id="mid">
	<div class="top">
	<div class="description">
	<?php
$con = mysql_connect("localhost","webdb1246","dr3t2usw");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("boeken", $con);

$ID = $_GET['boeken_ID'];
$result = mysql_query("SELECT * FROM `boeken` WHERE `boeken_ID` = $ID");


?>
	<p ><img src= "plaatjes/<?php echo $row['boeken_ID']; ?>.jpg" width="150" height="200"/> 	<h2><?php echo $row['titel']; ?>
	<?php echo $row['beschrijving']; ?><br /><br /> Auteur: <?php  echo $row['FirstName'] . " " . $row['LastName'];?><br /> <b>Prijs: <?php $row['prijs'] ?></b></p> <br />
	 <a href="http://www.google.nl"><img src="winkelwagenknop.png" width="225px" height="38px"></a>
	</div>
	</div>
	</div>
	<div id="logo">
	<p><a href="index.php"><img src="flamingo4.jpeg" width="105" height="113"> </a>
	</div>
	</div>
	</body>
	</html>
