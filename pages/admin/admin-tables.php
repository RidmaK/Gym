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
if(!isset($_SESSION['admin_id'])) {	
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
                    <div class="col-md-12">
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
                    <div class="col-md-12">
                        <div class="card  card-plain">
                            <div class="card-header">
                                <h4 class="card-title"> Table on Plain Background</h4>
                                <p class="category"> Here is a subtitle for this table</p>
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
    

     <!--   Core JS Files   -->
    <?php 
    include '../../inc/basic/include-dashboard-js.php';
    ?>
  
    <script src="../../assets/demo/demo.js"></script>
    
    
    <script>
        $(document).ready(function(){
            $(function() {
                $('.sidebar-wrapper ul li.s-table').addClass('active');
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