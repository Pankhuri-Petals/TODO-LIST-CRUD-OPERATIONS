<!--?php
 $con=mysqli_connect("localhost","root", "", "todo") or die("connection fail");
?-->

<?php
$con = mysqli_connect("localhost", "root", "", "todo");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
