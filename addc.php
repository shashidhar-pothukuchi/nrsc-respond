<?php
require_once('db.php');

$cname= $_POST['cname'];
$ccode= $_POST['ccode'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO centre (sno,cname, ccode)
VALUES (nextval('splog_adfarm_seq4'),'$cname', '$ccode')";

$conn->exec($sql);
echo "<script>alert('Centre successfully added!'); window.location='centre.php'</script>";

?>