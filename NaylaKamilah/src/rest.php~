<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "test";
$conn = mysql_connect($host,$user,$password) or die (mysql_error());
mysql_select_db($db,$conn) or die (mysql_error());

$xml=<<<XML
<root>
<string>TEKS</string>
</root>
XML;

$dataString = simplexml_load_string($xml);
	
	
	$string = $dataString->string;

	$query = "insert into request (string) values ('$string')";
	$res = mysql_query($query);
	
	if($res) {
		header("Content-type: text/xml");
		echo "<?xml version = '1.0' encoding='UTF-8'?>";
		echo "<root>";
		echo "<result>OK</result>";
		echo "</root>";
		
		}
		else {
			echo '<script language = "javascript"> alert ("Failed to save Data") </script>';
			}
	
?>