

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Student</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>



</head>
<body>

	<div class="wrapper">
		<?php include "nav.php"; ?>
		<div class="container">
			<h1 style="color:#043b76;">Add A New Student</h1>
		</div>
		<div class="container">



			<form action="config.php" method="post" id="createvalidate" name="createvalidate">
				<div class="card card-primary">
					<div class="card-header">
						<h2 class="card-title">Add Student</h2>


					</div>
					<div class="card-body">
						<div class="container">
							<div class="row">
								<div class="col-12 form-group">
									<label  class="form-label">Name</label>
									<input type="text" placeholder="Enter Student Name"class="form-control" name="NAME">
								</div>

								<div class="col-6 form-group">
									<label  class="form-label">Date Of Birth</label>
									<input type="date" placeholder="Enter Date of Birth"class="form-control" max="2019-12-31" name="DOB">
								</div>

								<div class="col-12 ">
									<h3 style="color:#007bff;">Obtained Marks</h3>
								</div>
								<div class="col-4 form-group">
									<label  class="form-label">English</label>
									<input type="number"  placeholder="Enter English Mark"class="form-control" name="ENGLISH">
								</div>
								<div class="col-4 form-group">
									<label  class="form-label">Science</label>
									<input type="number"  placeholder="Enter Science Mark"class="form-control" name="SCIENCE">
								</div>
								<div class="col-4 form-group">
									<label  class="form-label">Maths</label>
									<input type="number"  placeholder="Enter Maths Mark"class="form-control" name="MATHS">
								</div>


							</div>

						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Submit</button>


					</div>
				</div>
			</form>







		</div>



		<?php include "footer.php";?>