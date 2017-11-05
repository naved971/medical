<?php 

$servername = "localhost";
$username = "root";
$password = "";


// we connect to example.com and port 3307
$link = mysql_connect($servername , $username, $password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);

?>