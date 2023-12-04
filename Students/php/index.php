
<?php

include "retrieve.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students List</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

</head>
<body>

	<div class="wrapper">
		<?php include "nav.php"; ?>

		<div class="title_index">
			<h1 style="color:#007089">Students Management</h1>
		</div>



		<div class="table_space">


			<table class="table table-striped table-bordered">
				<thead class="table-info">
					<tr class="text-center-heading">
						<th scope="col ">Roll.No</th>
						<th scope="col ">Student Name</th>
						<th scope="col ">Date of birth</th>
						<th scope="col ">Age</th>
						<th scope="col ">English</th>
						<th scope="col ">Maths</th>
						<th scope="col ">Science</th>
						<th scope="col ">Total Marks</th>
						<th scope="col ">Average Marks</th>
						<th scope="col ">Action</th>
						<th scope="col ">View</th>

					</tr>
				</thead>
				<tbody>

					<?php
					$n = 1;
					while ($row = $data->fetch_assoc()) {
						?>
						<tr class="text-center-row">
							<th scope="row text-center"><?php echo $n++; ?></th>

							<td class="text-center"><?= $row["NAME"] ?></td>
							<td class="text-center"><?= $row["DOB"] ?></td>
							<td class="text-center"><?= $row["AGE"] ?></td>
							<td class="text-center"><?= $row["ENGLISH"] ?></td>
							<td class="text-center"><?= $row["MATHS"] ?></td>
							<td class="text-center"><?= $row["SCIENCE"] ?></td>
							<td class="text-center"><?= $row["TOTAL"] ?></td>
							<td class="text-center"><?= $row["AVERAGE"] ?></td>

							<td class="text-center">


								

								<button  type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['ID'];?>">Delete</button>





							</td>
							<td class="text-center">
								<a href="view.php?id=<?= $row["ID"] ?>">
									<button type="submit"class="btn btn-primary">View</button></a>
								</td>

							</tr>
							<div  class="modal fade" id="exampleModal<?php echo $row['ID'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header  bg-success">
											<h5 class="modal-title" id="exampleModalLabel">Delete</h5>
											<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="formcontroll">
												<label>Confirm to Delete <span class="page_name"><?php echo $row['NAME']; ?>?</span></label>
											</div>
										</div>
										<div class="card-footer">
											<form method="post">

												<button type="submit" class="btn btn-danger" name="delete" value="<?= $row["ID"] ?>">Yes</button>
											</form>

											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
										</div>
									</div>
								</div>
							</div>

							<?php

						}?>



					</tbody>
				</table>
			</div>


			<?php include "footer.php";?>