<?php 
include ('header.php'); 
$ID=$_GET['id'];
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="row-fluid">
<div class="span3"></div>
<div class="span6">


<div class="hero-unit-3">
<center>

<?php
include('db.php');
$result = $conn->prepare("SELECT * FROM student where student_id='$ID'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$id=$row['student_id'];
?>
<form class="form-horizontal" method="post" action="edit_PDO.php<?php echo '?student_id='.$id; ?>"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Personal Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">College Name:</label>
                                    <div class="controls">
                                        <input type="text" name="fname" required value=<?php echo $row['fname']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">University Name:</label>
                                    <div class="controls">
                                        <input type="text" name="uname" required value=<?php echo $row['uname']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Location:</label>
                                    <div class="controls">
                                        <input type="text" name="mname" required value=<?php echo $row['mname']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">State:</label>
                                    <div class="controls">
                                        <input type="text" name="lname" required value=<?php echo $row['lname']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Code:</label>
                                    <div class="controls">
                                        <input type="text" name="address" required value=<?php echo $row['address']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Email:</label>
                                    <div class="controls">
                                        <input type="email" name="email" required value=<?php echo $row['email']; ?>>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Mobile No:</label>
                                    <div class="controls">
                                        <input type="text" name="location" required value=<?php echo $row['location']; ?>>
                                    </div>
                                </div>
								
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="index1.php" class="btn">Back</a>
                                    </div>
                                </div>
								

                            </form>
<?php } ?>
								</center>
								</center>

								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
</body>
</html>
								