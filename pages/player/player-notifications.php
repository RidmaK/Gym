<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php 
session_start();
include('../../php/basic/connection.php');
if(!isset($_SESSION['player_id'])) {	
	header('location:/?noPermission=1');
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">

    <?php 
    include '../../inc/basic/include-css-font.php';
    ?>
    <link rel="stylesheet" type="text/css" href="../../assets/css/nucleo-icons.css">
    
    <link rel="stylesheet" type="text/css" href="../../assets/css/black-dashboard.css?v=1.0.0">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" type="text/css" href="../../assets/demo/demo.css" >
    
    <title>
        Black Dashboard by Creative Tim
    </title>
</head>

<body class="">
    
    <div class="wrapper">
        
        <?php
        //sidebar
        include './inc/sidebar.php';
        ?>
        
        <div class="main-panel">
            
            <!-- Navbar -->
            <?php 
            //navbar
            include './inc/navbar.php';
            ?>
            
            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
            
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Notifications Style</h4>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-info">
                                    <span>This is a plain notification</span>
                                </div>
                                <div class="alert alert-info">
                                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                    <span>This is a notification with close button.</span>
                                </div>
                                <div class="alert alert-info alert-with-icon" data-notify="container">
                                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                    <span data-notify="icon" class="tim-icons icon-bell-55"></span>
                                    <span data-notify="message">This is a notification with close button and icon.</span>
                                </div>
                                <div class="alert alert-info alert-with-icon" data-notify="container">
                                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                    <span data-notify="icon" class="tim-icons icon-bell-55"></span>
                                    <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Notification states</h4>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-primary">
                                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                    <span><b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
                                </div>
                                <div class="alert alert-info">
                                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                    <span><b> Info - </b> This is a regular notification made with ".alert-info"</span>
                                </div>
                                <div class="alert alert-success">
                                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                    <span><b> Success - </b> This is a regular notification made with ".alert-success"</span>
                                </div>
                                <div class="alert alert-warning">
                                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                    <span><b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
                                </div>
                                <div class="alert alert-danger">
                                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                    <span><b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="places-buttons">
                                    <div class="row">
                                        <div class="col-md-6 ml-auto mr-auto text-center">
                                            <h4 class="card-title">
                                                Notifications Places
                                                <p class="category">Click to view notifications</p>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 ml-auto mr-auto">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','left')">Top Left</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','center')">Top Center</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','right')">Top Right</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 ml-auto mr-auto">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','left')">Bottom Left</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','center')">Bottom Center</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','right')">Bottom Right</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php 
            //footer
            include './inc/footer.php';
            ?>
            
        </div>
        
    </div>
    
    <?php 
    //dashboard-styler
    include './inc/dashboard-styler.php';
    ?>
    
  
    <!--   Core JS Files   -->
    <?php 
    include '../../inc/basic/include-dashboard-js.php';
    ?>
  
    <script src="../../assets/demo/demo.js"></script>
    
    
    <script>
        $(document).ready(function(){
            $(function() {
                $('.sidebar-wrapper ul li.s-notification').addClass('active');
            });
        });
    </script>
    
    
    <script>
        $(document).ready(function() {
          $().ready(function() {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');
            $main_panel = $('.main-panel');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



            $('.fixed-plugin a').click(function(event) {
              if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                  event.stopPropagation();
                } else if (window.event) {
                  window.event.cancelBubble = true;
                }
              }
            });

            $('.fixed-plugin .background-color span').click(function() {
              $(this).siblings().removeClass('active');
              $(this).addClass('active');

              var new_color = $(this).data('color');

              if ($sidebar.length != 0) {
                $sidebar.attr('data', new_color);
              }

              if ($main_panel.length != 0) {
                $main_panel.attr('data', new_color);
              }

              if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
              }

              if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data', new_color);
              }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
              var $btn = $(this);

              if (sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                sidebar_mini_active = false;
                blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
              } else {
                $('body').addClass('sidebar-mini');
                sidebar_mini_active = true;
                blackDashboard.showSidebarMessage('Sidebar mini activated...');
              }

              // we simulate the window Resize so the charts will get updated in realtime.
              var simulateWindowResize = setInterval(function() {
                window.dispatchEvent(new Event('resize'));
              }, 180);

              // we stop the simulation of Window Resize after the animations are completed
              setTimeout(function() {
                clearInterval(simulateWindowResize);
              }, 1000);
            });

            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
              var $btn = $(this);

              if (white_color == true) {

                $('body').addClass('change-background');
                setTimeout(function() {
                  $('body').removeClass('change-background');
                  $('body').removeClass('white-content');
                }, 900);
                white_color = false;
              } else {

                $('body').addClass('change-background');
                setTimeout(function() {
                  $('body').removeClass('change-background');
                  $('body').addClass('white-content');
                }, 900);

                white_color = true;
              }


            });

            $('.light-badge').click(function() {
              $('body').addClass('white-content');
            });

            $('.dark-badge').click(function() {
              $('body').removeClass('white-content');
            });
          });
        });
    </script>
    
    <script>
        $(document).ready(function() {
          // Javascript method's body can be found in assets/js/demos.js
          demo.initDashboardPageCharts();

        });
    </script>
    
</body>

</html>