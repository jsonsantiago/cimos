<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Will Writer Pro Plus Call Centre</title>
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
    <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/dore.light.blue.min.css">
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
</head>

<body id="app-container" class="menu-sub-hidden">
    <nav class="navbar fixed-top">
        <div class="main-menu">
             <img class="img_hdr" src="<?php echo ASSETS_URL; ?>img/cc_hdr.png">
        </div>
        <div class="ml-auto">

            <div class="user d-inline-block">

                <span class="name" name="log_in" id="log_in"></span>
                <a href="<?php echo BASE_URL; ?>Logout" id="logout">
                        <span>&nbsp;</span><i class="simple-icon-logout"></i>
                </a>
            </div>
        </div>
    </nav>
    <div class="sidebar">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <?php $current_uri = strtolower($this->uri->segment(1)); ?>
                    <li data-menu="dashboard" class="<?php echo ($current_uri == 'dashboard') ? 'active' : ''?>" >
                        <a href="<?php echo BASE_URL . 'dashboard'; ?>">
                            <i class="iconsmind-Monitor-Analytics"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- Appointment Setter -->
                    <?php  if($this->session->userdata('user_type') == 3) : ?>
                        <li data-menu="Next-lead" class="<?php echo ($current_uri == 'next-lead') ? 'active' : ''?>">
                            <a href="<?php echo BASE_URL . 'Next-lead'; ?>">
                                <i class="iconsmind-Phone-3"></i>
                                <span>Get Next Lead</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <!-- Admin/Management Only-->
                    <?php if(in_array($this->session->userdata('user_type'), array(1, 2)) )  : ?>
                        <li data-menu="all-leads" class="<?php echo ($current_uri == 'leads') ? 'active' : ''?>">
                            <a href="all_leads_side_menu">
                                <i class="iconsmind-Affiliate"></i><span>Leads</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <!-- SWA -->
                    <?php if($this->session->userdata('user_type') == 4)  : ?>
                        <li data-menu="assigned-leads" class="<?php echo ($current_uri == 'leads') ? 'active' : ''?>">
                            <a href="<?php echo BASE_URL . 'leads'; ?>">
                                <i class="iconsmind-Affiliate"></i><span>Assigned Leads</span>
                            </a>
                        </li>

                        <li data-menu="assigned-leads" class="<?php echo ($current_uri == 'get-message') ? 'active' : ''?>">
                            <a href="<?php echo BASE_URL . 'Get-message'; ?>">
                                <i class="iconsmind-Inbox"></i><span>Inbox</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <!-- Drafter -->
                    <?php if($this->session->userdata('user_type') == 5)  : ?>
                        <li data-menu="assigned-leads" class="<?php echo ($current_uri == 'leads') ? 'active' : ''?>">
                            <a href="<?php echo BASE_URL . 'leads'; ?>">
                                <i class="iconsmind-Affiliate"></i><span>Assigned Leads</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <li data-menu="my-profile" class="<?php echo ($current_uri == 'profile') ? 'active' : ''?>">
                        <a href="<?php echo BASE_URL . 'profile'; ?>">
                            <i class="iconsmind-Profile"></i> <span>My Profile</span>
                        </a>
                    </li>

                    <!-- Appointment Setter -->
                    <?php  if($this->session->userdata('user_type') == 3) : ?>
                        <li data-menu="import-lead" class="<?php echo ($current_uri == 'import') ? 'active' : ''?>">
                            <a href="<?php echo BASE_URL . 'import'; ?>">
                                <i class="iconsmind-Upload"></i><span>Import Leads</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <!-- Admin/Management Only-->
                    <?php if(in_array($this->session->userdata('user_type'), array(1, 2)) )  : ?>
                    <li data-menu="manage" class="<?php echo ($current_uri == 'users' || $current_uri == 'scripts' || $current_uri == 'email-template') ? 'active' : ''?>">
                        <a href="manage_side_menu">
                            <i class="iconsmind-Settings-Window"></i> <span>Manage</span>
                        </a>
                    </li>
                    <?php endif; ?>

                    <li data-menu="manage" class="<?php echo ($current_uri == 'reports') ? 'active' : ''?>">
                        <a href="reports_side_menu">
                            <i class="iconsmind-Pie-Chart3"></i> <span>Reports</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="sub-menu">
            <div class="scroll">
                <br>
                <ul class="list-unstyled" id="manage_side_menu" data-link="manage_side_menu">
                    <li>
                        <a href="<?php echo BASE_URL . 'users'; ?>">
                           <i class="iconsmind-Business-ManWoman"></i>Users
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . 'scripts'; ?>">
                           <i class="iconsmind-Letter-Open"></i>Call Scripts
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo BASE_URL . 'Email-template'; ?>">
                           <i class="simple-icon-event"></i>Email Templates
                        </a>
                    </li>
                </ul>

                <ul class="list-unstyled" id="reports_side_menu" data-link="reports_side_menu">
                    <li>
                        <a href="<?php echo BASE_URL . 'reports/leaderboard'; ?>">
                           <i class="iconsmind-Line-Chart4"></i>Leaderboards
                        </a>
                    </li>
                </ul>

                <ul class="list-unstyled mr-6" id="all_leads_side_menu" data-link="all_leads_side_menu">
                    <li>
                        <a href="<?php echo BASE_URL . 'leads'; ?>" class="lead-page">
                           <i class="iconsmind-Business-Mens"></i>All
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo BASE_URL . 'leads/Awaiting-Appointment-Setter'; ?>" class="lead-page">
                           <i class="simple-icon-calendar"></i>Awaiting Appointment Setter
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo BASE_URL . 'leads/Leads-On-Management'; ?>" class="lead-page">
                           <i class="iconsmind-Doctor"></i>Passed To Management
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo BASE_URL . 'leads/Awaiting-Senior-Will-Adviser'; ?>" class="lead-page">
                           <i class="iconsmind-Teacher"></i>Awaiting Senior Will Adviser
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo BASE_URL . 'leads/Awaiting-Drafter'; ?>" class="lead-page">
                           <i class="simple-icon-note"></i>Awaiting Drafter
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo BASE_URL . 'leads/Leads-With-WWP'; ?>" class="lead-page">
                           <i class="iconsmind-File-Word"></i>With Documents Produced from WWP
                        </a>
                    </li>
                </ul>
            </div>
        </div>
       
    </div>

<script>
     $(document).ready(function(){

        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy'
        });

        $.ajax({

            url: "<?php echo BASE_URL; ?>Users/Getlogged_in",
            method: "POST",
            data:$(this).serialize(),
            dataType: 'json',
            success:function(data)
            {

                if(data.success)
                {
                    $('#log_in').html(data.Name);
                }

            }

        });
    });

</script>



<?php include_once("footer.php"); ?>

