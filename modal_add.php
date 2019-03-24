	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Click Here To Add</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="btn btn-primary" href="home.php">Home</a>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add College</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="add.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">College Name </label></td>
							<td width="30"></td>
							<td><input type="text" name="fname" placeholder="College" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">University Name </label></td>
							<td width="30"></td>
							<td><input type="text" name="uname" placeholder="University" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Location</label></td>
							<td width="30"></td>
							<td><input type="text" name="mname" placeholder="Location" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">State</label></td>
							<td width="30"></td>
							<td><input type="text" name="lname" placeholder="State" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Code</label></td>
							<td width="30"></td>
							<td><input type="text" name="address" placeholder="Code" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Email</label></td>
							<td width="30"></td>
							<td><input type="email" name="email" placeholder="someone@domain.com" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Mobile No</label></td>
							<td width="30"></td>
							<td><input type="text" name="location" placeholder="Enter 10 digit mobile no" required /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			