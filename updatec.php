<?php
include 'db.php';

$get_id=$_REQUEST['sno'];

$cname= $_POST['cname'];
$ccode= $_POST['ccode'];


$sql = "UPDATE centre SET cname ='$cname', ccode ='$ccode' WHERE sno = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Edit The Account!'); window.location='centre.php'</script>";


?>

