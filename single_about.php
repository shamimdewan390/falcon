<?php require 'deshboard_part/header.php' ?>
<?php if($_SESSION['power']==1 || $_SESSION['power']==2){ ?>
<?php

require 'db.php';

$id = $_GET['id'];

	$select = "SELECT * FROM abouts WHERE id=$id";
	$select_result = mysqli_query($db, $select);

	$catch_user = mysqli_fetch_assoc($select_result);



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> About Info</title>
		<link rel="stylesheet" href="./asset/datatable/css/bootstrap.min.css">
		<link rel="stylesheet" href="./asset/datatable/css/style.css">
	</head>
	<body>
		
		<div class="container mt-5">
			<div class="row">
				<div class="col-lg-12 m-auto">
					<div class="card bg-light mb-2">
						<div class="card-header text-white" style="background: linear-gradient(88deg, #13b4ca, #18cabe);" ><h3> About Info</h3></div>
						<div class="card-body">
							<table class="table table-bordered">
								<tr>
									<th>ID</th>
									<td><?php echo $catch_user['id'] ?></td>
								</tr>
								<tr>
									<th>ABOUT TITLE</th>
									<td><?php echo $catch_user['about_title'] ?></td>
								</tr>
								<tr>
									<th>ABOUT DESCRIPTION</th>
									<td><?php echo $catch_user['about_desp'] ?></td>
								</tr>
								<tr>
									<th>ABOUT SUB-TITLE</th>
									<td><?php echo $catch_user['about_sub_title'] ?></td>
								</tr>
								<tr>
									<th>FEATURE</th>
									<td><?php echo $catch_user['feature'] ?></td>
								</tr>
								<tr>
									<th>PHOTO</th>
									<td><img src="uploads/abouts/<?php echo $catch_user['about_img'] ?>" alt="" width='300'></td>
								</tr>
							</table>
							<a href="view-about.php" class="btn btn-primary">Back</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require 'deshboard_part/footer.php' ?>
		<?php }else{
			header('location:logout.php');
		} ?> 
		<script src="asset/datatable/js/jquery-2.2.4.min.js"></script>
		<script src="asset/datatable/js/bootstrap.min.js"></script>
		<script src="asset/datatable/js/custom.js"></script>
	</body>
</html>