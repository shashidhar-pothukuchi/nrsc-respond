<?php
require_once('db.php');

$fname= $_POST['fname'];
$mname= $_POST['mname'];
$lname= $_POST['lname'];
$address= $_POST['address'];
$location= $_POST['location'];
$email= $_POST['email'];
$uname = $_POST['uname'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO student (student_id,fname, mname, lname, address, email,location,uname)
VALUES (nextval('splog_adfarm_seq2'),'$fname', '$mname', '$lname', '$address', '$email','$location','$uname')";

$conn->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='index1.php'</script>";

?>