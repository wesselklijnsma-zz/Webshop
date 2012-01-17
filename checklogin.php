<?php
$host="webdb1246"; // Host name 
$username="webdb1246"; // Mysql username 
$password="dr3t2usw"; // Mysql password 
$db_name="webdb1246"; // Database name 
$tbl_name="gebruikers"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['email']; 
$mypassword=$_POST['wachtw'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

// encrypt password
$encrypted_mypassword=md5($mypassword);

$sql="SELECT * FROM $gebruikers WHERE email='$myusername' and wachtw='$encrypted_mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:login_success.php");
}
else {
echo "Fout e-mailadres of wachtwoord";
}
?>