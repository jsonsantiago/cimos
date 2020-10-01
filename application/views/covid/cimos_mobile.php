<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cimos- Covid Declaration</title>
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
            height: 80px;
            padding-top: 0;
        }
        .app-logo img{
            position: absolute;
            margin: 0 auto;
            margin-top: 20px;
            top:0;
            left: 0;
            right: 0;
            text-align: center;
            z-index: -1;
            height: 40px;
        }
        #photo_preview {
            width: auto;
            height: auto;
            max-height: 300px;
        }
		.modal-dialog {
			height: 100%;
		}
		.modal-content {
			height: auto;
		}
	</style>
</head>

<body id="app-container" class="menu-hidden" company_id="<?php echo $company_id; ?>" user_id="<?php echo $user_id; ?>">
    <nav class="navbar fixed-top">
        <a class="app-logo" href="#">
            <img class="img-fluid" src="<?php echo ($company_id == 1) ? ASSETS_URL.'img/ymd-logo.png' : ASSETS_URL.'img/access-equity-release-logo.png'; ?>" onerror="this.onerror=null; this.src='<?php echo ASSETS_URL; ?>img/default_logo.png'">
        </a>
    </nav>
    <main>
	<div class="col-12 mt-3 mb-3 card ">
        <form id="cimos_add">
    		<div class="position-relative">
                <img id="photo_preview" src="<?php echo  ASSETS_URL.'img/default_img.png' ?>" class="img-thumbnail border mx-auto d-block m-3">
            </div>
            <label class="btn btn-info mb-4 btn-upload col-12" for="photo_file" title="Upload image file">
                <input type="file" class="sr-only" id="photo_file" name="photo_file" accept="image/*">Take Photo
            </label>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Lead ID #</label>
                <input type="text" class="form-control" id="lead_id" name="lead_id" onkeypress="return isNumberKey(this, event);" required>
            </div>

            <input type="hidden" class="form-control" id="latitude" name="latitude">
            <input type="hidden" class="form-control" id="longitude" name="longitude">

            <h5 class="col-sm-6 col-form-label">COVID STATEMENT</h5>
            <div class="form-group mb-2 col-sm-12" >
                <div class="custom-control custom-checkbox mb-2 ">
                    <input type="checkbox" class="custom-control-input" name="normal_temp" id="normal_temp">
                    <label class="custom-control-label " for="normal_temp"> I confirm that I have taken my own temperature and that it is at or below…</label>
                </div>

                <div class="custom-control custom-checkbox mb-2 ">
                    <input type="checkbox" class="custom-control-input" name="no_symptoms" id="no_symptoms" >
                    <label class="custom-control-label " for="no_symptoms"> I can confirm that I am currently not experiencing any COVID symptoms, fever, cough, loss of smell or taste….</label>
                </div>

                <div class="custom-control custom-checkbox mb-2 ">
                    <input type="checkbox" class="custom-control-input" name="no_contact_with_positive" id="no_contact_with_positive">
                    <label class="custom-control-label " for="no_contact_with_positive"> I can confirm that I have not been in contact with anyone who is currently suffering from those symptoms</label>
                </div>

                <div class="custom-control custom-checkbox mb-2 ">
                    <input type="checkbox" class="custom-control-input" name="with_PPE" id="with_PPE">
                    <label class="custom-control-label " for="with_PPE"> I confirm that I have the required PPE mask, hand sanitiser, my own water and that I will confirm to the client of our Covid 19 procedures upon arrival</label>
                </div>

               
		</div>
   

		<button type="submit" class="btn btn-success mb-4 mt-3 col-12">Submit</button>
        </form>


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

        if(location.protocol == 'Https:')
        {
            getLocation();
        }
        else
        {
            ipLookUp();
        }
    
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
                $("#with_PPE").val(0);
            }

            if($("#no_symptoms").prop("checked") == true){
                $("#no_symptoms").val(1);
            }
            else if($("#no_symptoms").prop("checked") == false){
                $("#no_symptoms").val(0);
            }

            cimos_data = new FormData($('#cimos_add')[0]);

            //console.log(form_data);
            save_covid_statement(cimos_data);
        });

	});

    function ipLookUp () {
        $.ajax('http://ip-api.com/json')
            .then(
                function success(response) {
                    // console.log('User\'s Location Data is ', response);
                    // console.log('User\'s Country', response.country);
                    // console.log(response.lat, response.lon)
                    $("#longitude").val(response.lon);
                    $("#latitude").val(response.lat);
            },

            function fail(data, status) {
                console.log('Request failed.  Returned status of',
                            status);
            }
        );
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