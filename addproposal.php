<?php
require_once('db.php');
$date = $_POST['date'];
$isroc = $_POST['isroc'];
$iname= $_POST['iname'];
$uname= $_POST['uname'];
$ptitle= $_POST['ptitle'];
$pduration= $_POST['pduration'];
$ninvest= $_POST['ninvest'];
$sinvest = $_POST['sinvest'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO newproposal (date,isrocenter,collegename,affuniversity,proposaltitle,propduration,investigators,selinvestigators)
VALUES ('$date','$isroc','$iname','$ uname', '$ptitle', '$pduration' , '$ninvest','$sinvest')";

$conn->exec($sql);
echo "<script>alert('proposal page successfully added!'); window.location='newproposal1.php'</script>";

?>