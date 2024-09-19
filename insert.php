<?php
$LIST=$_POST['list'];
include "config.php";
mysqli_query($con,"INSERT INTO `todolist` (`list`) VALUES ('$LIST')");
header("location:index.php");
?>