<?php

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

$obj = json_decode($json, true);

error_reporting(E_ALL ^ E_DEPRECATED);

define('DB_NAME', 'Test123');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Pass@123');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!db_selected) {
	die('Cannot use ' . DB_NAME . ': ' . mysql_error());
}

echo 'Connected Successfully';

$nameValue = $_POST['Name'];
$emailValue = $_POST['Email'];
$arrayValue = $obj["b"];

print $arrayValue;

$sql = "INSERT INTO Table1 (Name, Email, ArrayTest) VALUES ('$nameValue', '$emailValue', '$arrayValue')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

?>