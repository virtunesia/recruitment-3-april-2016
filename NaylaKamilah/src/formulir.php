<html>
<form action = "formulir.php" method="post">
String : <input type="text" name="string"</input>
<input type="submit" name="submit" value="Submit Form"</input>
</form>
</html>
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "test";
$conn = mysql_connect($host,$user,$password) or die (mysql_error());
mysql_select_db($db,$conn) or die (mysql_error());

if(isset($_POST['submit'])) 
{
	
	$string = $_POST['string'];

	$query = "insert into request (string) values ('$string')";
	$res = mysql_query($query);
	
	if(!$res) {
		echo '<script language = "javascript"> alert ("Failed, please Check the Query") </script>';
		} else {
			echo '<script language = "javascript"> alert ("Data Successfully Stored in Database") </script>';
			}
		}
		
// Mana bagian html untuk formulir ini?
// Masukkan tag html itu di sini dan action-nya adalah formulir.php ini juga
		
?>