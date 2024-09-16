<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_add = $_POST['saddress'];
$stu_cls = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost", "root", "", "phpmysql-crud") or die("Connection Failed");
$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_add}', sclass = '{$stu_cls}', sphone = '{$stu_phone}' WHERE sid='{$stu_id}' ";
$result = mysqli_query($conn, $sql) or die ("Query Unsuccessful.");

header("Location: http://localhost/phpmysql-crud/");

mysqli_close($conn);