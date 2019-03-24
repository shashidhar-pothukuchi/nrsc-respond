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


<?php include('addcentre.php'); ?>



						
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Centre Information Table</strong>                            </div>
                            <thead>
                                <tr>
                                  <th colspan="6" style="text-align:center;">CENTRE DETAILS </th>
                                </tr>
                                <tr>
                                    <th style="text-align:center;">S.No</th>
                                    <th style="text-align:center;">Centre Name</th>
                                    <th style="text-align:center;">Centre code</th>
                                    <th style="text-align:center;">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM centre ORDER BY sno ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['sno'];
							?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['cname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['ccode']; ?></td>
								
								<td style="text-align:center; width:350px;">
									<a href="editc.php<?php echo '?id='.$id; ?>" class="btn btn-info">Edit</a>
									 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" >Delete </a>								</td>
									
										<!-- Modal -->
								<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel">Delete</h3>
								</div>
								<div class="modal-body">
								<p><div style="font-size:larger;" class="alert alert-danger">Are you Sure you want Delete <b style="color:red;"><?php echo $row['cname']." ".$row['ccode'] ; ?></b> Data?</p>
								</div>
								<hr>
								<div class="modal-footer">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
								<a href="deletec.php<?php echo '?sno='.$id; ?>" class="btn btn-danger">Yes</a>								</div>
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
		$session->redirect('centre.php');
	}
	
	?>
