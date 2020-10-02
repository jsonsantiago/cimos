<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cimos- Covid Declaration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL; ?>bootstrap/css/bootstrap.css">

	<!-- HELPERS -->
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL; ?>helpers/utils.css">

	<!-- Admin theme -->
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL; ?>themes/admin/layout.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL; ?>themes/admin/color-schemes/default.css">

	<!-- Components theme -->
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL; ?>themes/components/default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL; ?>themes/components/border-radius.css">

	<script type="text/javascript" src="<?php echo ASSETS_URL; ?>js-core/jquery-core.js"></script>

	<!-- Sweet Alert -->
	<script src="<?php echo ASSETS_URL; ?>sweetalert/sweetalert.min.js"></script>
	<script src="<?php echo ASSETS_URL; ?>sweetalert/sweetalert2.all.min.js"></script>

	<script type="text/javascript">
		$(window).load(function(){
			setTimeout(function() {
				$('#loading').fadeOut( 400, "linear" );
			}, 300);
		});
		var url = '<?php echo BASE_URL; ?>';
		var url_assets = '<?php echo ASSETS_URL; ?>';
		var url_seg_1 = '<?php echo $this->uri->segment(1); ?>';
		var url_seg_2 = '<?php echo $this->uri->segment(2); ?>';
		var url_seg_3 = '<?php echo $this->uri->segment(3); ?>';
	</script>

	<style type="text/css">
		.spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
		#page-header{
			top: 0;
			box-shadow: 0 0 6px #DDD;
		}
		main {
			padding: 15px 0px;
		}
		.app-logo img{
			position: absolute;
			margin: 0 auto;
			margin-top: 20px;
			top:0;
			left: 0;
			right: 0;
			text-align: center;
			z-index: 100;
			height: 40px;
		}
		#photo_preview {
			width: auto;
			height: auto;
			margin: 0 auto;
			margin-bottom: 10px;
			max-height: 300px;
		}
		.modal-dialog {
			height: 100%;
		}
		.modal-content {
			height: auto;
		}
		.panel {
			margin: 0 10px;
		}
		.col-centered {
			margin: 0 auto;
			margin-bottom: 10px;
			text-align: center;
		}
		.check {
			margin: 0px;
			padding: 0px;
		}
	</style>
</head>

<body id="sb-site" company_id="<?php echo $company_id; ?>" user_id="<?php echo $user_id; ?>">
	<div id="loading">
		<div class="spinner">
		<div class="bounce1"></div>
		<div class="bounce2"></div>
		<div class="bounce3"></div>
		</div>
	</div>

	<div id="page-header" class="border-bottom shadow-sm p-3 mb-5 bg-white rounded">
		<a class="app-logo" href="#">
		<img class="img-fluid" src="<?php echo ($company_id == 1) ? ASSETS_URL.'images/ymd-logo.png' : ASSETS_URL.'images/access-equity-release-logo.png'; ?>" onerror="this.onerror=null; this.src='<?php echo ASSETS_URL; ?>images/default_logo.png'">
		</a>
	</div>

	<main>
		<div class="panel">
			<div class="panel-body">
				<form class="form-horizontal" id="cimos_add">
					<input type="text" class="form-control" id="latitude" name="latitude">
					<input type="text" class="form-control" id="longitude" name="longitude">

					<div class="form-group col-centered">
						<div class="col-6">
							<img id="photo_preview" src="<?php echo  ASSETS_URL.'images/default_img.png' ?>" class="img-thumbnail">
						</div>
						<label class="btn btn-info btn-upload col-12 col-centered" for="photo_file" title="Upload image file">
							<input type="file" class="sr-only" id="photo_file" name="photo_file" accept="image/*">Take Photo
						</label>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Lead ID #</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="lead_id" name="lead_id" value="<?php echo (empty($lead_details)) ? "" :$lead_details['l_id']; ?>" onchange="get_lead_dtls();" onkeypress="return isNumberKey(this, event);" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Client Name</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="name" value="<?php echo (empty($lead_details)) ? "N/A" :$lead_details['title'] ." " .$lead_details['first_name'] ." " .$lead_details['last_name']; ?>" name="name" readonly>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Client Address</label>
						<div class="col-sm-6">
							<textarea class="form-control" id="address" rows="4" name="address" readonly><?php echo (empty($address)) ? "N/A" : $address; ?></textarea>
						</div>
					</div>

					<div class="form-group check">
						<label class="col-sm-4 control-label">COVID STATEMENT</label>
						<div class="col-sm-6 checkbox">
							<label>
								<input type="checkbox" name="normal_temp" id="normal_temp">I confirm that I have taken my own temperature and that it is at or below…
							</label>
						</div>
					</div>

					<div class="form-group check">
						<label class="col-sm-4 control-label"></label>
						<div class="col-sm-6 checkbox">
							<label>
								<input type="checkbox" name="no_symptoms" id="no_symptoms" >I can confirm that I am currently not experiencing any COVID symptoms, fever, cough, loss of smell or taste…
							</label>
						</div>
					</div>

					<div class="form-group check">
						<label class="col-sm-4 control-label"></label>
						<div class="col-sm-6 checkbox">
							<label>
								<input type="checkbox" name="no_contact_with_positive" id="no_contact_with_positive">I can confirm that I have not been in contact with anyone who is currently suffering from those symptoms
							</label>
						</div>
					</div>

					<div class="form-group check">
						<label class="col-sm-4 control-label"></label>
						<div class="col-sm-6 checkbox">
							<label>
								<input type="checkbox" name="with_PPE" id="with_PPE">I confirm that I have the required PPE mask, hand sanitiser, my own water and that I will confirm to the client of our Covid 19 procedures upon arrival
							</label>
						</div>
					</div>

					<div class="form-group"></div>
					<div class="form-group"></div>
					<div class="form-group">
						<div class="col-sm-12 center-div">                      
							<button type="submit" class="btn btn-success btn-block col-12">Submit</button>
						</div>  
					</div>
				</form>
			</div>
		</div>
	</main>

<script type="text/javascript">

//** PHOTO CAPTURING RELATED CODES **//
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#photo_preview').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

$("#photo_file").change(function(){
	readURL(this);
});

$(document).ready(function(){

	getLocation();

	$("#cimos_add").submit(function(event){
		event.preventDefault();
		if($("#normal_temp").prop("checked") == true){
			$("#normal_temp").val(1);
		}
		else if($("#normal_temp").prop("checked") == false){
			$("#normal_temp").val(0);
		}

		if($("#no_contact_with_positive").prop("checked") == true){
			$("#no_contact_with_positive").val(1);
		}
		else if($("#no_contact_with_positive").prop("checked") == false){
			$("#no_contact_with_positive").val(0);
		}

		if($("#with_PPE").prop("checked") == true){
			$("#with_PPE").val(1);
		}
		else if($("#with_PPE").prop("checked") == false){
			("#with_PPE").val(0);
		}

		if($("#no_symptoms").prop("checked") == true){
			$("#no_symptoms").val(1);
		}
		else if($("#no_symptoms").prop("checked") == false){
			$("#no_symptoms").val(0);
		}

		cimos_data = new FormData($('#cimos_add')[0]);
		save_covid_statement(cimos_data);
	});

});

function get_lead_dtls()
{
	lead_id = $("#lead_id").val();
	$.ajax({
		url: "<?php echo BASE_URL; ?>Covid_declaration/get_lead_dtls",
		method: "POST",
		dataType: 'json',
		data:{lead_id: lead_id},
		success:function(data)
		{
			if(data.status)
			{
				$("#name").val(data.data.name);
				$("#address").val(data.data.address);
			}
			else
			{
				$("#name").val("N/A");
				$("#address").val("N/A");
			}
		}
	});
}

function save_covid_statement(data)
{
	swal({
		title: 'Warning',
		html: "Are you sure you want to continue?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#28A745',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Proceed',
		allowOutsideClick: false,
		width: '400px',
	}).then((result) => {
		if (result.value) {
			$.ajax({
				url: "<?php echo BASE_URL; ?>Covid_declaration/save_covid_statement",
				method: "POST",
				dataType: 'json',
				data: data,
				processData: false,
				contentType: false,
				beforeSend: function() {
					swal({
						title: 'Saving covid statement',
						allowOutsideClick: false,
						allowEscapeKey: false,
						allowEnterKey: false,
						onOpen: () => {
							swal.showLoading()
						}
					})
				},
				success:function(response)
				{
					swal({
						title:"Success",
						text: "Thank You – your declaration has been logged",
						type: "success",
						confirmButtonColor: '#28A745',
						confirmButtonText: 'Ok',
						allowOutsideClick: false,
					}).then(function() {
						window.location.href = "<?php echo BASE_URL; ?>Covid/?comp_id="+$("body").attr('company_id') +"&user_id="+$("body").attr('user_id');
					});
				}
			});
		}
	});
}

function getLocation() 
{
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition, showError);
	} else { 
		swal({
			title:"Warning",
			text: "Geolocation is not supported by this browser.",
			type: "warning",
			confirmButtonColor: '#28A745',
			confirmButtonText: 'Ok',
			allowOutsideClick: false
		});
	}
}

function showPosition(position) 
{
	$("#longitude").val(position.coords.longitude);
	$("#latitude").val(position.coords.latitude);
}

function showError(error) 
{
	switch(error.code) {
		case error.PERMISSION_DENIED:
			swal({
				title:"Warning",
				text: "User denied the request for Geolocation.",
				type: "warning",
				confirmButtonColor: '#28A745',
				confirmButtonText: 'Ok',
				allowOutsideClick: false
			});
			break;
		case error.POSITION_UNAVAILABLE:
			swal({
				title:"Warning",
				text: "Location information is unavailable.",
				type: "warning",
				confirmButtonColor: '#28A745',
				confirmButtonText: 'Ok',
				allowOutsideClick: false
			});
			break;
		case error.TIMEOUT:
			swal({
				title:"Warning",
				text: "The request to get user location timed out.",
				type: "warning",
				confirmButtonColor: '#28A745',
				confirmButtonText: 'Ok',
				allowOutsideClick: false
			});
			break;
		case error.UNKNOWN_ERROR:
			swal({
				title:"Warning",
				text: "An unknown error occurred.",
				type: "warning",
				confirmButtonColor: '#28A745',
				confirmButtonText: 'Ok',
				allowOutsideClick: false
			});
			break;
	}
}

function isNumberKey(txt, evt) {
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	var number = txt.value.split('.');
	if (charCode == 46) {
		//Check if the text already contains the . character
		if (txt.value.indexOf('.') === -1) {
			return true;
		} else {
			return false;
		}
	} else {
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
	}

	//get the carat position
	var caratPos = getSelectionStart(txt);
	var dotPos = txt.value.indexOf(".");
	if( caratPos > dotPos && dotPos>-1 && (number[1].length > 1)){
		return false;
	}

	return true;
}

function getSelectionStart(o) {
	if (o.createTextRange) {
		var r = document.selection.createRange().duplicate()
		r.moveEnd('character', o.value.length)
		if (r.text == '') return o.value.length
		return o.value.lastIndexOf(r.text)
	} else return o.selectionStart
}

</script>
</body>
</html>