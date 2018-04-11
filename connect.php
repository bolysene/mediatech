<?php 
if (isset($_POST['submit'])){
if(!empty($_POST['username']) && !empty($_POST['password'])) {
//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
$user=mysql_real_escape_string($_POST['username']); 
$pass=mysql_real_escape_string($_POST['password']);
$con=mysql_connect('localhost','root','jesuisnee21091') or die(mysql_error());
mysql_select_db('mediatech') or die("cannot select DB");
$query=mysql_query("SELECT * FROM mediatech WHERE users='".$user."'");
$numrows=mysql_num_rows($query);
if($numrows==0)
{
//md5() calculates the MD5 hash of a string
$encrypt_password=md5($pass);
$sql="INSERT INTO users(username,password) VALUES('$user','$encrypt_password')";
$result=mysql_query($sql);
if($result!=1) 
{
echo "Failure!";
}
else{
echo "Account Successfully Created";
}
} else {
echo "That username already exists! Please try again with another.";
}
} else {
	echo "All fields are required!";
}
}
?>
