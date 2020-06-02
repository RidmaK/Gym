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
if(!isset($_SESSION['coach_id'])) {	
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
                    <div class="col-12">
                        <div class="card card-chart">
                            <div class="card-header ">
                                <div class="row">
                                    <div class="col-sm-6 text-left">
                                        <h5 class="card-category">Total Shipments</h5>
                                        <h2 class="card-title">Performance</h2>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                            <label class="btn btn-sm btn-primary btn-simple active" id="0">
                                                <input type="radio" name="options" checked>
                                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
                                                <span class="d-block d-sm-none">
                                                    <i class="tim-icons icon-single-02"></i>
                                                </span>
                                            </label>
                                            <label class="btn btn-sm btn-primary btn-simple" id="1">
                                                <input type="radio" class="d-none d-sm-none" name="options">
                                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>
                                                <span class="d-block d-sm-none">
                                                    <i class="tim-icons icon-gift-2"></i>
                                                </span>
                                            </label>
                                            <label class="btn btn-sm btn-primary btn-simple" id="2">
                                                <input type="radio" class="d-none" name="options">
                                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>
                                                <span class="d-block d-sm-none">
                                                    <i class="tim-icons icon-tap-02"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="chartBig1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Shipments</h5>
                                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="chartLinePurple"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Daily Sales</h5>
                                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="CountryChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Completed Tasks</h5>
                                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="chartLineGreen"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card card-tasks">
                            <div class="card-header ">
                                <h6 class="title d-inline">Tasks(5)</h6>
                                <p class="card-category d-inline">today</p>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                                        <i class="tim-icons icon-settings-gear-63"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#pablo">Action</a>
                                        <a class="dropdown-item" href="#pablo">Another action</a>
                                        <a class="dropdown-item" href="#pablo">Something else</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="table-full-width table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="title">Update the Documentation</p>
                                                    <p class="text-muted">Dwuamish Head, Seattle, WA 8:47 AM</p>
                                                </td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                                        <i class="tim-icons icon-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="" checked="">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="title">GDPR Compliance</p>
                                                    <p class="text-muted">The GDPR is a regulation that requires businesses to protect the personal data and privacy of Europe citizens for transactions that occur within EU member states.</p>
                                                </td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                                        <i class="tim-icons icon-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="title">Solve the issues</p>
                                                    <p class="text-muted">Fifty percent of all respondents said they would be more likely to shop at a company </p>
                                                </td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                                        <i class="tim-icons icon-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="title">Release v2.0.0</p>
                                                    <p class="text-muted">Ra Ave SW, Seattle, WA 98116, SUA 11:19 AM</p>
                                                </td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                                        <i class="tim-icons icon-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="title">Export the processed files</p>
                                                    <p class="text-muted">The report also shows that consumers will not easily forgive a company once a breach exposing their personal data occurs. </p>
                                                </td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                                        <i class="tim-icons icon-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="title">Arival at export process</p>
                                                    <p class="text-muted">Capitol Hill, Seattle, WA 12:34 AM</p>
                                                </td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                                        <i class="tim-icons icon-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title"> Simple Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table tablesorter " id="">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Country
                                                </th>
                                                <th>
                                                    City
                                                </th>
                                                <th class="text-center">
                                                    Salary
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Dakota Rice
                                                </td>
                                                <td>
                                                    Niger
                                                </td>
                                                <td>
                                                    Oud-Turnhout
                                                </td>
                                                <td class="text-center">
                                                    $36,738
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Minerva Hooper
                                                </td>
                                                <td>
                                                    Curaçao
                                                </td>
                                                <td>
                                                    Sinaai-Waas
                                                </td>
                                                <td class="text-center">
                                                    $23,789
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Sage Rodriguez
                                                </td>
                                                <td>
                                                    Netherlands
                                                </td>
                                                <td>
                                                    Baileux
                                                </td>
                                                <td class="text-center">
                                                    $56,142
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Philip Chaney
                                                </td>
                                                <td>
                                                    Korea, South
                                                </td>
                                                <td>
                                                    Overland Park
                                                </td>
                                                <td class="text-center">
                                                    $38,735
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Doris Greene
                                                </td>
                                                <td>
                                                    Malawi
                                                </td>
                                                <td>
                                                    Feldkirchen in Kärnten
                                                </td>
                                                <td class="text-center">
                                                    $63,542
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Mason Porter
                                                </td>
                                                <td>
                                                    Chile
                                                </td>
                                                <td>
                                                    Gloucester
                                                </td>
                                                <td class="text-center">
                                                    $78,615
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Jon Porter
                                                </td>
                                                <td>
                                                    Portugal
                                                </td>
                                                <td>
                                                    Gloucester
                                                </td>
                                                <td class="text-center">
                                                    $98,615
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
        
    
    <?php 
    include '../../inc/basic/include-dashboard-js.php';
    ?>
  
    <script src="../../assets/demo/demo.js"></script>
    
    
    <script>
        $(document).ready(function(){
            $(function() {
                $('.sidebar-wrapper ul li.s-dashboard').addClass('active');
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