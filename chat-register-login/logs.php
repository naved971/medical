<?php

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'test');

$result1 = mysqli_query($con,"SELECT * FROM logs ORDER BY id DESC");

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['user_id'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}