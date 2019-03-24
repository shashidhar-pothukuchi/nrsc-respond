<?php

	session_start();
	
	require_once 'class.user.php';
	$session = new USER();
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: white;
}

* {
    box-sizing: border-box;
}
/* Set a style for the submit button */
.container1{
	background-color: #cee9ea;
	border: 1px;
	padding: 20px;
	margin-top: 50px; 
}
h4{

	text-align: center;
	margin:50px; 
}

.normbutton{
	background-color: #bcb8b8;
    color: black;
    padding: 10px 10px;
    margin: 10px 8px;
    border: none;
    cursor: pointer;
    width: 10%;
    opacity: 0.9;
	text-decoration:none;
}
.registerbtn {
    background-color: #4b6c82;
    color: white;
    padding: 16px 20px;
    margin: 8px 0px;
    border: none;
    cursor: pointer;
    width: 15%;
    opacity: 0.9;
    margin-left: 300px;
    
}
.cancelbtn {
    background-color: #bcb8b8;
    color: black;
    padding: 16px 20px;
    margin: 10px 8px;
    margin-left: 100px;
    border: none;
    cursor: pointer;
    width: 15%;
    opacity: 0.9;
	text-decoration:none;
}

.registerbtn:hover {
    opacity: 1;
}


</style>
</head>
<body>


<form method="post"  enctype="multipart/form-data">
  <div class="container-fluid">
    
    <h1><center>NRSC RESPOND</h1>
    <p class="text-center">Please fill in this form to create new proposal.</p>
    <hr>
    <h4>NEW PROPOSAL</h4>
    <div class="row">
    <div class="col" style="margin-left: 200px;">
        <label for="date"><b>Date</b></label>
    <input name ="date" type="text" id="char" value="<?php echo date("d/m/y"); ?>" required>
	</div>
	<div class="col">	
		<b style="margin-left: 100px;">ISRO CENTRE </b>
    <select name="isroc" class="dropbtn">
      <div class="dropdown-content">
      <?php
	  					
								require_once('db.php');
								$iname = $_POST[iname];
								$result = $conn->prepare("SELECT * FROM centre");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['cname'];
			?>
      <option value="<?php echo $row ['cname'] ;?>"><?php echo $row ['cname'] ;?></option>
      <?php }?>
	  </div>
    </select>
</div>
</div>
<div class="container container1" >
<div class="row">
	<div class="col-lg text-center">
		<div class="col">
<label for="iname"><b>Institution Name</b></label>
    <input type="text" placeholder="Institution" name="iname" required>
	</div>
</div>
	<div class="col-lg text-center">
<label for="uname"><b>Affiliated to University</b></label>
    <input type="text" placeholder="University" name="uname" required>
		</div>
</div>
	<div class="row" style="margin-top: 20px; margin-left: 150px;">
<label for="ptitle"><b>Proposal Title</b></label>
    <input type="text" placeholder="Maximum 30 characters" name="ptitle" required>
	</div>
</div>
<div  class="row" style="margin-top:50px; margin-left: 30px;">
	<div class="col">
<label for="pduration"><b>Project Duration</b></label>
    <input type="text" name="pduration" required>
</div>
<div class="col">
	<label for="ninvest"><b>No. of Investigators</b></label>
    <input type="number"  name="ninvest" required>
</div>
<div class="col">	
	<label for="sinvest"><b>Select Investigators</b></label>
	<select name="sinvest" class="dropbtn">
      <div class="dropdown-content">
      <?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM pi");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['name'];
			?>
      <option value="<?php echo $row ['name'] ;?>"><?php echo $row ['name'] ;?></option>
      <?php }?>
	  </div>
	  </select>
	</div>
</div>
<h4>PROPOSAL COST</h4>

<?php include('dyntable.php') ?>


    <p style="margin-top: 50px;margin-left: 30px;">By creating a proposal you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" onclick="addproposal.php" class="registerbtn">Register</button>
	 <a href="clienthome.php" class="cancelbtn">cancel</a>
 </div>
  
  <div class="container"></div>
</form>
</body>
</html>

<?php if(!$session->is_loggedin())
	{
		// session no set redirects to login page
		$session->redirect('index.php');
	}
	
	?>