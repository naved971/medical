<?php
session_start();
$user_name = $_SESSION['user_name'];
$msg = $_REQUEST['msg'];

$con = mysqli_connect('localhost','root','');
mysqli_select_db( $con,'test');

mysqli_query($con,"INSERT INTO logs (`user_name`, `msg`) VALUES ('$uname', '$msg')");

$result1 = mysqli_query($con,"SELECT * FROM logs ORDER BY id DESC");

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['user_id'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}