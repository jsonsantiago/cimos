<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Softplay - Booking</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>font/iconsmind/style.css" />
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>font/simple-line-icons/css/simple-line-icons.css" />

	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/custom.css" />

	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/vendor/fullcalendar.min.css" />
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/vendor/dataTables.bootstrap4.min.css" />
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/vendor/datatables.responsive.bootstrap4.min.css" />
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/vendor/select2.min.css" />
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/vendor/select2-bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/vendor/perfect-scrollbar.css" />
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/vendor/owl.carousel.min.css" />
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/vendor/bootstrap-stars.css" />
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/vendor/nouislider.min.css" />
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/vendor/bootstrap-datepicker3.min.css" />
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/vendor/quill.snow.css" />
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/vendor/quill.bubble.css" />
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/dore.light.orange.min.css">
	<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/main.css" />

	<script src="<?php echo ASSETS_URL; ?>js/vendor/jquery-3.3.1.min.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/bootstrap.bundle.min.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/dore.script.js"></script>

	<style type="text/css">

	</style>
</head>

<body id="app-container" class="menu-hidden" >
	<nav class="navbar fixed-top">
		<a class="app-logo" href="#">
		</a>
	</nav>

	<main>
	<div class="col-12 mt-3 mb-3 card "> 
		<div class="position-relative">
			<img src="<?php echo ASSETS_URL; ?>img/default_img.png" alt="Centre Logo" class="img-thumbnail mx-auto d-block m-3" style="height: 150px">
		</div>
		<label class="btn btn-primary col-12 mb-3" for="file" title="Upload file">
			<input type="file" class="sr-only" id="file" name="file" accept=".jpg, .jpeg,.png">
			Take Photo
		</label>

		<div class="form-group col-md-6">
			<label for="inputEmail4">Lead ID #</label>
			<input type="text" class="form-control" id="lead_id" name="lead_id">
		</div>

		<div class="form-group col-md-6">
			<label for="inputEmail4">Temperature</label>
			<input type="text" class="form-control" id="temperature" name="temperature">
		</div>

		<h5 class="col-sm-6 col-form-label">COVID STATEMENT</h5>
		<div class="form-group mb-2 col-sm-12" >
			<div class="custom-control custom-checkbox mb-2 ">
				<input type="checkbox" class="custom-control-input" name="normal_temp" id="normal_temp">
				<label class="custom-control-label " for="normal_temp"> I do not have above normal temperature</label>
			</div>

			<div class="custom-control custom-checkbox mb-2 ">
				<input type="checkbox" class="custom-control-input" name="no_cough" id="no_cough">
				<label class="custom-control-label " for="no_cough"> I do not have a continuous cough</label>
			</div>

			<div class="custom-control custom-checkbox mb-2 ">
				<input type="checkbox" class="custom-control-input" name="no_sense" id="no_sense">
				<label class="custom-control-label " for="no_sense"> I have no loss/change to my sense of taste or smell</label>
			</div>

			<div class="custom-control custom-checkbox mb-2 ">
				<input type="checkbox" class="custom-control-input" name="no_symptoms" id="no_symptoms">
				<label class="custom-control-label " for="no_symptoms"> I have no other symptoms</label>
			</div>
		</div>

		<button type="submit" class="btn btn-success mb-4 mt-3">Submit</button>
	</div>
	</main>

	<script type="text/javascript">

	$(document).ready(function(){

	});

	</script>

	<script src="<?php echo ASSETS_URL; ?>js/vendor/Chart.bundle.min.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/chartjs-plugin-datalabels.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/moment.min.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/fullcalendar.min.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/datatables.min.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/dataTables.pageResize.min.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/perfect-scrollbar.min.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/owl.carousel.min.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/progressbar.min.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/jquery.barrating.min.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/select2.full.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/nouislider.min.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/bootstrap-datepicker.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/Sortable.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/bootstrap-notify.min.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/vendor/ckeditor5-build-classic/ckeditor.js"></script>
	<script src="<?php echo ASSETS_URL; ?>js/scripts.js"></script>
</body>

</html>