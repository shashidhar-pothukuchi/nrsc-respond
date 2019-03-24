<?php
require_once('db.php');

$mname= $_POST['mname'];
$lname= $_POST['lname'];
$address= $_POST['address'];
$location= $_POST['location'];
$email= $_POST['email'];
$uname = $_POST['uname'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO university (student_id, mname, lname, address, email,location,uname)
VALUES (nextval('splog_adfarm_seq2'), '$mname', '$lname', '$address', '$email','$location','$uname')";

$conn->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='index1.php'</script>";

?>