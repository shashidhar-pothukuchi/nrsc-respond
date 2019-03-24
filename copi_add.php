	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Click Here To Add</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="btn btn-primary" href="clienthome.php">Home</a>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="addcopitab.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Institution Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="institute_name" placeholder="Institution Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Department</label></td>
							<td width="30"></td>
							<td><input type="text" name="department" placeholder="Department" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">location</label></td>
							<td width="30"></td>
							<td><input type="text" name="location" placeholder="location" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">D.O.B</label></td>
							<td width="30"></td>
							<td><input type="text" name="DOB" placeholder="Date of birth" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Area of intrest</label></td>
							<td width="30"></td>
							<td><input type="text" name="area_intrest" placeholder="Area of intrest" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">NO of journals</label></td>
							<td width="30"></td>
							<td><input type="number" name="journals" placeholder="NO of journals" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">no of conferences</label></td>
							<td width="30"></td>
							<td><input type="number" name="conferences" placeholder="no of conferences" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="name" placeholder="Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Mobile no</label></td>
							<td width="30"></td>
							<td><input type="text" name="mobile_no" placeholder="Mobile no" required /></td>
						</tr>
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Designation</label></td>
							<td width="30"></td>
							<td><input type="text" name="designation"  required /></td>
						</tr>
						
						
						
						
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Email</label></td>
							<td width="30"></td>
							<td><input type="email" name="email" placeholder="Email" required /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			