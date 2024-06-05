<?php
$s_id = $_POST['sid'];
$s_name = $_POST['sname'];
$s_ad = $_POST['saddress'];
$s_class = $_POST['sclass'];
$s_phone = $_POST['sphone'];
$con = mysqli_connect("localhost","root","","crud") or die("Connection unsuccessful");
$sql = "update studentt set sname ='{$s_name}', saddress='{$s_ad}', cname='{$s_class}', sphone= '{$s_phone}' where sid= {$s_id}";
$result = mysqli_query($con,$sql) or die("query unsuccessful");
header("location: index.php");
mysqli_close($con);


?>