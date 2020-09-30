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

    <script src="<?php echo ASSETS_URL; ?>js/SPL_AJAX_Full.js"></script>

    <!-- Sweet Alert -->
    <script src="<?php echo ASSETS_URL; ?>css/dist/sweetalert.min.js"></script>
    <script src="<?php echo ASSETS_URL; ?>css/dist/sweetalert2.all.min.js"></script>

    <!-- Combo Date Controls -->
    <script src="<?php echo ASSETS_URL; ?>js/combodate/moment.min.js"></script>
    <script src="<?php echo ASSETS_URL; ?>js/combodate/combodate.js"></script>

    <style type="text/css">
    
        <?php echo $site_details['css']; ?>

        .modal-backdrop
        {
            background: #D5711F;
            opacity:0.8 !important;
        }
   
      
        @media (max-height: 600px) {

            #client_modal .modal-dialog {
                overflow-y: initial
            }
            #client_modal .modal-body {
                height:300px;
                overflow-y: auto;
            }
        }
        
    </style>


</head>

<body id="app-container"  class="menu-hidden" >
    <nav class="navbar fixed-top">
        <a class="navbar-logo" href="#">
             <img class="img-fluid center" src="<?php echo UPLOAD_URL.'logo.jpg' ?>" onerror="this.onerror=null; this.src='<?php echo ASSETS_URL; ?>img/default_logo.png'">
        </a>
    </nav>
    <main>

        <div class="col-12 mt-3 mb-3 card "> 
            <div class="position-relative">
                <img src="<?php echo  UPLOAD_URL.'default_img.png' ?>" onerror="this.onerror=null; this.src='<?php echo ASSETS_URL; ?>img/default_logo.png'" alt="Centre Logo" class="img-thumbnail mx-auto d-block m-3" style="height: 150px">
            </div>
            <label class="btn btn-primary col-12 mb-3" for="file" title="Upload file">
                <input type="file" class="sr-only" id="file" name="file" accept=".jpg, .jpeg,.png">
                Take Photo
            </label>

            <div class="input-group mb-3 mt-2">
                <label class="col-sm-1 col-form-label">Temperature </label>
                <input type="text" id="temperature" name="temperature" type="text" class="form-control" >
            </div>

            <h5 class="col-sm-6 col-form-label">COVID STATEMENT</h5>
            <div class="form-group mb-2 col-sm-12" >
                <div class="custom-control custom-checkbox mb-2 ">
                    <input type="checkbox" class="custom-control-input" name="normal_temp" id="normal_temp">
                    <label class="custom-control-label " for="customCheck1"> I do not have above normal temperature</label>
                </div>

                <div class="custom-control custom-checkbox mb-2 ">
                    <input type="checkbox" class="custom-control-input" name="no_cough" id="no_cough">
                    <label class="custom-control-label " for="customCheck1"> I do not have a continuous cough</label>
                </div>

                <div class="custom-control custom-checkbox mb-2 ">
                    <input type="checkbox" class="custom-control-input" name="no_sense" id="no_sense">
                    <label class="custom-control-label " for="customCheck1"> I have no loss/change to my sense of taste or smell</label>
                </div>
                
                <div class="custom-control custom-checkbox mb-2 ">
                    <input type="checkbox" class="custom-control-input" name="no_symptoms" id="no_symptoms">
                    <label class="custom-control-label " for="customCheck1"> I have no other symptoms</label>
                </div>
            </div>

            <button type="submit" class="btn btn-success mb-3">Save Changes</button>
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