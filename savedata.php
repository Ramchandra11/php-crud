<?php
 $student_n = $_POST['sname'];
 $student_add = $_POST['saddress'];
 $student_class = $_POST['class'];
 $student_p = $_POST['sphone'];
 $con = mysqli_connect("localhost","root","","crud") or die("connection unsuccessful");
  $sql = "insert into studentt(sname,saddress,cname,sphone) VALUES ('{$student_n}','{$student_add}','{$student_class}','{$student_p}')";

$result = mysqli_query($con, $sql) or die("Query unsuccessful");
// header("location: index.php");
header("location: http:/index.php");
// 
mysqli_close($con);

?>