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
$result = $conn->prepare("SELECT * FROM pi where id='$ID'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$id=$row['id'];
?>
<form class="form-horizontal" method="post" action="edit_PIO.php<?php echo '?id='.$id; ?>"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Personal Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Institution name:</label>
                                    <div class="controls">
                                        <input type="text" name="institute_name" required value=<?php echo $row['institute_name']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Department:</label>
                                    <div class="controls">
                                        <input type="text" name="department" required value=<?php echo $row['department']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">location:</label>
                                    <div class="controls">
                                        <input type="text" name="location" required value=<?php echo $row['location']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">DOB:</label>
                                    <div class="controls">
                                        <input type="text" name="DOB" required value=<?php echo $row['dob']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">area of intrest:</label>
                                    <div class="controls">
                                        <input type="text" name="area_intrest" required value=<?php echo $row['area_intrest']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">journals:</label>
                                    <div class="controls">
                                        <input type="text" name="journals" required value=<?php echo $row['journals']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">conferences:</label>
                                    <div class="controls">
                                        <input type="text" name="conferences" required value=<?php echo $row['conferences']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">name:</label>
                                    <div class="controls">
                                        <input type="text" name="name" required value=<?php echo $row['name']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Mobile no:</label>
                                    <div class="controls">
                                        <input type="text" name="mobile_no" required value=<?php echo $row['mobile_no']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">designation:</label>
                                    <div class="controls">
                                        <input type="text" name="designation" required value=<?php echo $row['designation']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Email:</label>
                                    <div class="controls">
                                        <input type="email" name="email" required value=<?php echo $row['email']; ?>>
                                    </div>
                                </div>
								
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="piindex.php" class="btn">Back</a>
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
								