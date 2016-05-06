<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "test";
$conn = mysql_connect($host,$user,$password) or die (mysql_error());
mysql_select_db($db,$conn) or die (mysql_error());


$filexml = simplexml_load_file("rest.xml");
	
	$string = $filexml->string;

	$query = "insert into request (string) values ('$string')";
	$res = mysql_query($query);
	
	if($res) {
		$xml = new DOMDocument("1.0","utf-8");
		$xml_root = $xml->createElement("root");
		$xml_result = $xml->createElement("result","OK");
		$xml_root->appendChild($xml_result);
		$xml->appendChild($xml_root);
		
		echo $xml->saveXML();
		
		}
		else {
			echo '<script language = "javascript"> alert ("Failed to save Data") </script>';
			}
	
?>