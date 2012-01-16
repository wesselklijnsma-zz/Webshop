<html>

<head>
</head>

<body>
<?php
$con = mysql_connect("localhost", "webdb1246", "dr3t2usw");
if (!$con)
{
die('Could not connect to DB: ' . mysql_error() );
}

mysql_select_db ("webdb1246", $con);

$sql="INSERT INTO gebruikers (aanhef, voor, achter, straat, huisnr, postcode, telnr, email, wachtw)
VALUES ('$_POST[titel]', '$_POST[voornaam]','$_POST[achternaam]', '$_POST[straatnaam]', '$_POST[huisnummer]', '$_POST[postcode]'
,'$_POST[telefoonnummer]', '$_POST[email]', '$_POST[passwd]')";

if (!mysql_query($sql,$con))
{
die ('Error: ' . mysql_error());
}
mysql_close($con)
?>
<a href=index.html>klik hier</a>
   </body>

</html>
