<?php
include 'db.php';

$get_id=$_REQUEST['student_id'];

$fname= $_POST['fname'];
$mname= $_POST['mname'];
$lname= $_POST['lname'];
$address= $_POST['address'];
$email= $_POST['email'];
$location = $_POST['location'];
$uname = $_POST['uname'];

$sql = "UPDATE student SET fname ='$fname', mname ='$mname', lname ='$lname', 
address ='$address', email ='$email', location ='$location', uname ='$uname' WHERE student_id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Edit The Account!'); window.location='index1.php'</script>";


?>

