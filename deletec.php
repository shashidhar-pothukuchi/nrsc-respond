<?php
require_once('db.php');

$get_id=$_GET['sno'];

// sql to delete a record
$sql = "Delete from centre where sno = '$get_id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:centre.php');
?>