<?php

	session_start();
	
	require_once 'class.user.php';
	$session = new USER();
?>	
<?php include('header.php'); ?>
<body>


    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">


<?php include('pi_add.php'); ?>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;principal investigator Table</strong>                            </div>
                            <thead>
                                <tr>
                                  <th colspan="6" style="text-align:center;">PRINCIPAL INVESTIGATOR DETAILS </th>
                                </tr>
                                <tr>
                                    <th style="text-align:center;">Institution Name</th>
                                    <th style="text-align:center;">Department</th>
                                    <th style="text-align:center;">location</th>
                                    <th style="text-align:center;">D.O.B</th>
                                    <th style="text-align:center;">Area of intrest</th>
									<th style="text-align:center;">NO of journals</th>
									<th style="text-align:center;">no of conferences</th>
									<th style="text-align:center;">Name</th>
									<th style="text-align:center;">Mobile no</th>
									<th style="text-align:center;">Designation</th>
									<th style="text-align:center;">Email</th>
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM pi ORDER by id ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['institute_name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['department']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['location']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['dob']; ?></td>
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['area_intrest']; ?></td>
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['journals']; ?></td>
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['conferences']; ?></td>
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['mobile_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['designation']; ?></td>
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['email']; ?></td>
								<td style="text-align:center; width:350px;">
									<a href="editpi.php<?php echo '?id='.$id; ?>" class="btn btn-info">Edit</a>
									 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" >Delete </a>								</td>
									
										<!-- Modal -->
								<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel">Delete</h3>
								</div>
								<div class="modal-body">
								<p><div style="font-size:larger;" class="alert alert-danger">Are you Sure you want Delete <b style="color:red;"><?php // echo $row['name']." ".$row['mname']." ".$row['lname'] ; ?></b> Data?</p>
								</div>
								<hr>
								<div class="modal-footer">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
								<a href="deletepi.php<?php echo '?id='.$id; ?>" class="btn btn-danger">Yes</a>								</div>
								</div>
								</div>
								</tr>
								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>


</body>
</html>
<?php
if(!$session->is_loggedin())
	{
		// session no set redirects to login page
		$session->redirect('index.php');
	}
	
	?>

