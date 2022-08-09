<?php require 'deshboard_part/header.php' ?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
	<html>
		<head>
			<title>Falcon Template</title>
			<link rel="stylesheet" href="./asset/plugin/bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="./asset/css/bootstrap-iso.css">
			<link rel="stylesheet" href="./asset/css/font-awesome.min.css">
			<link rel="stylesheet" href="./asset/css/sweetalert2.min.css">
			<link rel="stylesheet" href="./asset/css/style.css">
		</head>
		<body>
			<!-- ===============================
			Registration Form
			=================================-->
			<div class="content-wrapper">
				
				<section>
					<div class="container">
						<div class="row">
							<div class="col-lg-12 m-auto bg-secondary py-1">
								<div class="text-center text-white py-2 my-2" style="background: linear-gradient(88deg, #13b4ca, #18cabe);">
									<h2>Add Logo</h2>
								</div>
								<!-- Registration success msg -->
								
								<?php if (isset($_SESSION['success'])) { ?>
								<div class="alert alert-success" role="alert">
									<h2>
									<?php
										echo $_SESSION['success'];
									?>
									</h2>
								</div>
								<?php }  ?>
								<form action="logo_post.php" method="post" enctype="multipart/form-data">
									
									<div class="from-group pb-3" >
										<div class="text-white">
											<?php
											if (isset($_SESSION['formet_erroe'])) { ?>
											<div class="alert alert-danger" role="alert">
												<?php echo $_SESSION['formet_erroe']; ?>
											</div>
											
											
											<?php }unset($_SESSION['formet_erroe']); ?>
										</div>
										<div class="text-white">
											<?php
											if (isset($_SESSION['size_erroe'])) { ?>
											<div class="alert alert-danger" role="alert">
												<?php echo $_SESSION['size_erroe']; ?>
											</div>
											
											
											<?php }unset($_SESSION['size_erroe']); ?>
										</div>
										<input type="file" name="logo" class="form-control">
									</div>
									<div class="form-group">
										<input type="submit" id="btn" value="Submit" name="submit" class="btn btn-info btn-block">
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
			</div>
			<?php require 'deshboard_part/footer.php' ?>
			<!-- ===============================
			Scroll Up
			=================================-->
			<!-- <div id="gotoup"><i class="fa fa-chevron-up" aria-hidden="true"></i></div> -->
			
			<!-- <script src="./asset/js/jquery-1.12.4.min.js"></script> -->
			<!-- <script src="./asset/plugin/bootstrap/js/popper.min.js"></script> -->
			<!-- <script src="./asset/plugin/bootstrap/js/bootstrap.min.js"></script> -->
			<script src="./asset/js/bootstrap-datepicker.min.js"></script>
			<script src="./asset/js/sweetalert2.min.js"></script>
			<link rel="stylesheet" href="./asset/css/bootstrap-datepicker3.css">
			<script src="./asset/js/script.js"></script>
			<script>
					$("#exist, #fnempty").show();
					setTimeout(function() { $("#exist, #fnempty").hide(); }, 3000);
			</script>
			</script>
			
			<?php if (isset($_SESSION['success'])) { ?>
			<script>
				swal("Submitted", "Registration Successfully Confirmed", "success");
			</script>
			<?php
				unset($_SESSION['success']);
				}
			?>
			
		</body>
		<?php
		?>
	</html>