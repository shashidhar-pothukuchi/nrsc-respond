<?php
include 'db.php';

$get_id=$_REQUEST['id'];

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

$sql = "UPDATE copi SET institute_name ='$institute_name', department ='$department', location ='$location', 
DOB ='$DOB', area_intrest ='$area_intrest', journals='$journals', conferences='$conferences', name='$name', mobile_no='$mobile_no', designation='$designation', email='$email' WHERE id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Edit The Account!'); window.location='copiindex.php'</script>";


?>

