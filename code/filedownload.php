<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include('config.php');

$version = $_GET["v"];
$input   = $_GET["n"];

mysql_connect('localhost', $dbuser, $dbpass);
@mysql_select_db($dbname) or die("Unable to select database");
$version = mysql_real_escape_string($version);
$input = mysql_real_escape_string($input);
if($version!='' && $input!=''){
echo '//cdn.jsdelivr.net/' . $input . '/' . $version . '/' . $input . '.zip';
}
?>
