<?php
session_start();
session_destroy();
echo 'kya hua?';
header("Location:../index.php");
exit();
?>