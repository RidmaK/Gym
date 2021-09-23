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
$user=$_SESSION['player_id'];
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
        Powershack
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
                        <!-- <form action="search.php" method="post">
                                <input type="text" name="search" class="input" style="width: 900px;border:none;box-shadow:none;" id="inlineFormInputGroup" placeholder="SEARCH">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="tim-icons icon-simple-remove"></i>
                                </button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
           <!-- End Navbar -->
           <?php
            $query=mysqli_query($conn,"SELECT * from player where username='{$user}'");
            $row=mysqli_fetch_array($query);
           ?>
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Profile</h5>
                            </div>
                            <div class="card-body">
                                <form action="admin-user.php" method="post">
                                    <div class="row">
                                        <div class="col-md-3 pr-md-1">

                                            <div class="form-group">
                                                <label>Plan</label>
                                                <input type="text" class="form-control" name="username"  value="<?php echo $row['plan']?>" >

                                            </div>
                                        </div>
                                        <div class="col-md-4 px-md-1">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username"  value="<?php echo $row['username']?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-5 pl-md-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="text" class="form-control" name="email"  value="<?php echo $row['email']?>" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" required name="fname"  value="<?php echo $row['fname']?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-1">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" required name="lname"  value="<?php echo $row['lname']?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-1">
                                            <div class="form-group">
                                                <label>Birthday</label>
                                                <input type="text" class="form-control" required name="bdate"  value="<?php echo $row['bdate']?>" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address"  value="<?php echo $row['address']?>" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>NIC</label>
                                                <input type="text" name="nic" class="form-control" placeholder="NIC"  value="<?php echo $row['nic']?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-md-1">
                                            <div class="form-group">
                                                <label>Blood Group</label>
                                                <input type="text" required name="gender" class="form-control" value="<?php echo $row['bgroup']?>" >

                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-1">
                                            <div class="form-group">
                                                <label>Contact</label>
                                                <input type="text" required name="mobile" class="form-control"  value="<?php echo $row['mobile']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" required name="gender" class="form-control" value="<?php echo $row['gender']?>" >

                                            </div>
                                        </div>
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>Weiht(Kg) category</label>
                                                <input type="text" required name="gender" class="form-control" value="<?php echo $row['weight']?>" >

                                                 </div> </div> </div> </div> <div class="card-footer">
                                                            <!-- <button type="submit" name="saveuser" class="btn btn-fill btn-primary">Save</button> -->
                                            </div>
                                </form>
                            </div>
                            
                        
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="author">
                                        <div class="block block-one"></div>
                                        <div class="block block-two"></div>
                                        <div class="block block-three"></div>
                                        <div class="block block-four"></div>
                                        <a href="javascript:void(0)">
                                            <img class="avatar" src="./img/emilyz.jpg" alt="...">
                                            <h5 class="title">Emilyz Wills</h5>
                                        </a>
                                        <p class="description">
                                            Fitness Player
                                        </p>
                                    </div>
                                </div>
                                <div class="card-description">
                                    Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="button-container">
                                    <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                                        <i class="fab fa-facebook"></i>
                                    </button>
                                    <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                                        <i class="fab fa-google-plus"></i>
                                    </button>
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
                $('.sidebar-wrapper ul li.s-user').addClass('active');
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