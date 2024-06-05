<?php
$s_id = $_GET['id'];
$con = mysqli_connect("localhost","root","","crud") or die ("Connection unsucccessfull");
$sql = "Delete from studentt where sid={$s_id}";
$result = mysqli_query($con,$sql) or die("Query unsuccessful");
header("location: index.php");
mysqli_close($con);
?>