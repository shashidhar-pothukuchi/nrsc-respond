<?php
require_once('db.php');

$institute_name =  $_POST['institute_name'];
$department= $_POST['department'];
$location= $_POST['location'];
$DOB= $_POST['DOB'];
$area_intrest= $_POST['area_intrest'];
$journals= $_POST['journals'];
$conferences= $_POST['conferences'];
$name= $_POST['name'];
$mobile_no= $_POST['mobile_no'];
$designation=$_POST['designation'];
$email= $_POST['email'];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO pi (id,institute_name,department,location,DOB,area_intrest,journals,conferences,name,mobile_no,designation,email)
VALUES (nextval('splog_adfarm_seq2'),'$institute_name', '$department', '$location', '$DOB', '$area_intrest','$journals','$conferences','$name','$mobile_no','$designation','$email')";

$conn->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='piindex.php'</script>";

?>