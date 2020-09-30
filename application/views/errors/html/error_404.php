<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cimos 404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>font/iconsmind/style.css" />
    <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>font/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/custom.css" />
    <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/dore.light.orange.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/main.css" />

    <style type="text/css">
    	.fixed-background {
			/* Add the blur effect */
			filter: blur(5px);
			-webkit-filter: blur(5px);
    	}
    	.center-card {
    		padding: 30px;
    	}
    </style>
</head>

<body class="background">
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col col-md-5 mx-auto my-auto">
                    <div class="card center-card">
                        <div class="form-side">
                            <div class="text-center">
                                <a href="<?php echo BASE_URL; ?>">
                                    <!-- <img src="<?php echo ASSETS_URL; ?>img/softplay_logo.png" class="img-fluid mb-4"> -->
                                </a>
                                <h6 class="mb-4"><?php echo $message; ?></h6>
                                <p class="mb-0 text-muted text-small mb-0">Error code</p>
                                <p class="display-1 font-weight-bold mb-5">
                                    404
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="<?php echo ASSETS_URL; ?>js/vendor/jquery-3.3.1.min.js"></script>
    <script src="<?php echo ASSETS_URL; ?>js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?php echo ASSETS_URL; ?>js/dore.script.js"></script>
    <script src="<?php echo ASSETS_URL; ?>js/scripts.js"></script>
</body>

</html>
<script>
    $(document).ready(function(){
        var string = window.location.pathname;
        var substring = "bookings";

        if(string.includes(substring))
        {
            $('#back_to_dashboard').hide();
        }
        else
        {
            $('#back_to_dashboard').show();
        }
        
    });

</script>