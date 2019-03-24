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
$result = $conn->prepare("SELECT * FROM centre where sno='$ID'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$id=$row['sno'];
?>
<form class="form-horizontal" method="post" action="updatec.php<?php echo '?sno='.$id; ?>"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Centre Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Centre Name:</label>
                                    <div class="controls">
                                        <input type="text" name="cname" required value=<?php echo $row['cname']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Centre code:</label>
                                    <div class="controls">
                                        <input type="text" name="ccode" required value=<?php echo $row['ccode']; ?>>
                                    </div>
                                </div>
                            
								
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="centre.php" class="btn">Back</a>
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
								