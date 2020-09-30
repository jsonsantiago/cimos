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

      <!-- Sweet Alert -->
    <script src="<?php echo ASSETS_URL; ?>css/dist/sweetalert.min.js"></script>
    <script src="<?php echo ASSETS_URL; ?>css/dist/sweetalert2.all.min.js"></script>


	<style type="text/css">
         .navbar {
            height: 120px;
        }
        .app-logo img{
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            text-align: center;
            z-index: -1;
            margin-top: -3%;
            height: 66px;
        }
		canvas {
			background-image: ;
		}
		video {
		}
		.modal-dialog {
			height: 100%;
		}
		.modal-content {
			height: auto;
		}
	</style>
</head>

<body id="app-container" class="menu-hidden" company_id="<?php echo $company_id; ?>">
	<nav class="navbar fixed-top">
		<a class="app-logo" href="#">
            <img class="img-fluid" src="<?php echo ($company_id == 1) ? ASSETS_URL.'img/ymd-logo.png' : ASSETS_URL.'img/access-equity-release-logo.png'; ?>" onerror="this.onerror=null; this.src='<?php echo ASSETS_URL; ?>img/default_logo.png'">
		</a>
	</nav>

	<main>
	<div class="col-12 mt-3 mb-3 card "> 
		<canvas id="canvas" class="border mt-3" width=320 height=320>

		</canvas>

		<button type="button" class="btn btn-info mb-4 mt-3" id="take_photo"><i class="simple-icon-camera mr-2 "></i>Take Photo</button>

        <form id="cimos_add">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Lead ID #</label>
                <input type="text" class="form-control" id="lead_id" name="lead_id" required>
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Temperature</label>
                <input type="text" class="form-control" id="temperature" name="temperature" onkeypress="return isNumberKey(this, event);" required>
            </div>
            <input type="hidden" class="form-control" id="latitude" name="latitude">
            <input type="hidden" class="form-control" id="longitude" name="longitude">

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
                    <input type="checkbox" class="custom-control-input" name="no_symptoms" id="no_symptoms" >
                    <label class="custom-control-label " for="no_symptoms"> I have no other symptoms</label>
                </div>
		</div>
   

		<button type="submit" class="btn btn-success mb-4 mt-3 col-12">Submit</button>
        </form>


	</div>


	<div id="capture_modal" class="modal fade align-self-center show" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-overflow">
				<div class="modal-body">
					<video id="player" class="border mt-3" width="100%" height="100%" autoplay ></video>

					<button type="button" class="btn col-12 btn-info mx-auto d-block" id="capture">Capture</button>
					<button type="button" class="btn col-12 btn-dark mx-auto d-block mt-2" data-dismiss="modal" id="cancel">Cancel</button>
				</div>  
			</div>
		</div>
	</div>
	</main>

	<script type="text/javascript">

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

            if($("#no_cough").prop("checked") == true){
                $("#no_cough").val(1);
            }
            else if($("#no_cough").prop("checked") == false){
                $("#no_cough").val(0);
            }

            if($("#no_sense").prop("checked") == true){
                $("#no_sense").val(1);
            }
            else if($("#no_sense").prop("checked") == false){
                $("#no_sense").val(0);
            }

            if($("#no_symptoms").prop("checked") == true){
                $("#no_symptoms").val(1);
            }
            else if($("#no_symptoms").prop("checked") == false){
                $("#no_symptoms").val(0);
            }

            cimos_data = $(this).serializeArray();
            save_covid_statement(cimos_data);
        });

	});

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
                url: "<?php echo BASE_URL; ?>Covid/save_covid_statement",
                method: "POST",
                dataType: 'json',
                data: data,
                success:function(response)
                {
                    if(response.success)
                    {
                        swal({
                            title:"Success",
                            text: "Thank You – your declaration has been logged",
                            type: "success",
                            confirmButtonColor: '#28A745',
                            confirmButtonText: 'Ok',
                            allowOutsideClick: false,
                        }).then(function() {
                            window.location.href = "<?php echo BASE_URL.'Covid_declaration/1'; ?>";
                        });
                    }
                   
                    
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
            if (charCode > 31 &&
                (charCode < 48 || charCode > 57))
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

    //** PHOTO CAPTURING RELATED CODES **//
	const player = document.getElementById('player');
	const canvas = document.getElementById('canvas');
	const context = canvas.getContext('2d');
	const captureButton = document.getElementById('capture');

	const constraints = {
		video: true,
	};

	captureButton.addEventListener('click', () => {
		context.drawImage(player, 0, 0, canvas.width, canvas.height);
		stopCamera(player);
		$('#capture_modal').modal('hide');
	});

	$('#take_photo').click(function() {
		$('#capture_modal').modal('show');
		navigator.mediaDevices.getUserMedia(constraints)
			.then((stream) => {
				player.srcObject = stream;
			});
	});

	$('#cancel').click(function() {
		stopCamera(player);
	});

	function stopCamera(videoElem) {
		if(videoElem.srcObject){	
			const stream = videoElem.srcObject;
			const tracks = stream.getTracks();

			tracks.forEach(function(track) {
				track.stop();
			});

			videoElem.srcObject = null;
		}
	}

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