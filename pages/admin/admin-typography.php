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
                        <div class="card">
                            <div class="card-header mb-5">
                                <h5 class="card-category">Black Table Heading</h5>
                                <h3 class="card-title">Created using Poppins Font Family</h3>
                            </div>
                            <div class="card-body">
                                <div class="typography-line">
                                    <h1><span>Header 1</span>The Life of Black Dashboard </h1>
                                </div>
                                <div class="typography-line">
                                    <h2><span>Header 2</span>The Life of Black Dashboard </h2>
                                </div>
                                <div class="typography-line">
                                    <h3><span>Header 3</span>The Life of Black Dashboard </h3>
                                </div>
                                <div class="typography-line">
                                    <h4><span>Header 4</span>The Life of Black Dashboard </h4>
                                </div>
                                <div class="typography-line">
                                    <h5><span>Header 5</span>The Life of Black Dashboard </h5>
                                </div>
                                <div class="typography-line">
                                    <h6><span>Header 6</span>The Life of Black Dashboard </h6>
                                </div>
                                <div class="typography-line">
                                    <p><span>Paragraph</span>
                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                                    </p>
                                </div>
                                <div class="typography-line">
                                    <span>Quote</span>
                                    <blockquote>
                                        <p class="blockquote blockquote-primary">
                                            "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                                            <br>
                                            <br>
                                            <small>
                                                - Noaa
                                            </small>
                                        </p>
                                    </blockquote>
                                </div>
                                <div class="typography-line">
                                    <span>Muted Text</span>
                                    <p class="text-muted">
                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                                    </p>
                                </div>
                                <div class="typography-line">
                                    <span>Primary Text</span>
                                    <p class="text-primary">
                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                                </div>
                                <div class="typography-line">
                                    <span>Info Text</span>
                                    <p class="text-info">
                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                </div>
                                <div class="typography-line">
                                    <span>Success Text</span>
                                    <p class="text-success">
                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                </div>
                                <div class="typography-line">
                                    <span>Warning Text</span>
                                    <p class="text-warning">
                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                                    </p>
                                </div>
                                <div class="typography-line">
                                    <span>Danger Text</span>
                                    <p class="text-danger">
                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                </div>
                                <div class="typography-line">
                                    <h2><span>Small Tag</span>
                                        Header with small subtitle <br>
                                        <small>Use "small" tag for the headers</small>
                                    </h2>
                                </div>
                                <div class="typography-line">
                                    <span>Lists</span>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5>Unordered List</h5>
                                            <ul>
                                                <li>List Item</li>
                                                <li>List Item</li>
                                                <li class="list-unstyled">
                                                    <ul>
                                                        <li>List Item</li>
                                                        <li>List Item</li>
                                                        <li>List Item</li>
                                                    </ul>
                                                </li>
                                                <li>List Item</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Ordered List</h5>
                                            <ol>
                                                <li>List Item</li>
                                                <li>List Item</li>
                                                <li>List item</li>
                                                <li>List Item</li>
                                            </ol>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Unstyled List</h5>
                                            <ul class="list-unstyled">
                                                <li>List Item</li>
                                                <li>List Item</li>
                                                <li>List item</li>
                                                <li>List Item</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Inline List</h5>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">List1</li>
                                                <li class="list-inline-item">List2</li>
                                                <li class="list-inline-item">List3</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="typography-line">
                                    <span>Code</span>
                                    <p>This is
                                        <code>.css-class-as-code</code>, an example of an inline code element. Wrap inline code within a
                                        <code> &lt;code&gt;...&lt;/code&gt;</code>tag.
                                    </p>
                                    <pre>1. #This is an example of preformatted text.<br/>2. #Here is another line of code</pre>
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
                $('.sidebar-wrapper ul li.s-typography').addClass('active');
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