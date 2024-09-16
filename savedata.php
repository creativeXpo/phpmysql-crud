<?php 
$stu_name = $_POST['sname'];
$stu_add = $_POST['saddress'];
$stu_cls = $_POST['class'];
$stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost", "root", "", "phpmysql-crud") or die("Connection Failed");
$sql = "INSERT INTO student(sname, saddress, sclass, sphone) VALUES ('{$stu_name}', '{$stu_add}', '{$stu_cls}', '{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die ("Query Unsuccessful.");

header("Location: http://localhost/phpmysql-crud/");
mysqli_close($conn);

