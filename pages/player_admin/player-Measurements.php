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
$user = $_SESSION['player_id'];
if (!isset($_SESSION['player_id'])) {
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
  <link rel="stylesheet" type="text/css" href="../../assets/demo/demo.css">

  <title>
    PowerShack
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
              <form action="search.php" method="post">
                <input type="text" name="search" class="input"  id="inlineFormInputGroup" placeholder="SEARCH">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->

      <div class="content">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="card ">
              <?php
                 if (isset($_GET['edit'])) {
                  echo ("<div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\" >");
                  echo ("<strong>");
                  echo ("Measurment added Succesfully");
                  echo ("</strong>");
                  echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                  echo ("<span aria-hidden=\"true\">");
                  echo ("&times;");
                  echo ("</span>");
                  echo ("</button>");
                  echo ("</div>");
              }
              if (isset($_GET['update'])) {
                echo ("<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\" >");
                echo ("<strong>");
                echo ("Measurment updated Succesfully");
                echo ("</strong>");
                echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                echo ("<span aria-hidden=\"true\">");
                echo ("&times;");
                echo ("</span>");
                echo ("</button>");
                echo ("</div>");
            }
              ?>
              <div class="card-header">
                <h4> Measurements</h4>
              </div>
              <div class="card-body">

                <form action="" method="post">
                  <div class="row" style="padding: 20px;">
                    <table class="table table-bordered" >
                      <thead>
                       <tr> <th>
                          <center>Measurements</center>
                        </th>
                        <th>
                          <center>Value</center>
                        </th></tr>
                      </thead>
                      <tr>
                        <td>
                          <center>Blood Pressure</center>
                        </td>
                        <td> <input type="text" class="form-control"  name="Blood" placeholder="Enter the value" value="">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <center>Pulse</center>
                        </td>
                        <td> <input type="text" class="form-control"  name="Pulse" placeholder="Enter the value" value="">
                      </tr>
                      <tr>
                        <td>
                          <center>Cholesterols</center>
                        </td>
                        <td> <input type="text" class="form-control"  name="Cholesterols" placeholder="Enter the value" value="">
                      </tr>
                      <tr>
                        <td>
                          <center>Weight</center>
                        </td>
                        <td> <input type="text" class="form-control"  name="Weight" placeholder="Enter the value" value="">
                      </tr>
                      <tr>
                        <td>
                          <center>Chest</center>
                        </td>
                        <td> <input type="text" class="form-control"  name="Chest" placeholder="Enter the value" value="">
                      </tr>
                      <tr>
                        <td>
                          <center>Arm</center>
                        </td>
                        <td> <input type="text" class="form-control"  name="Arm" placeholder="Enter the value" value="">
                      </tr>
                      <tr>
                        <td>
                          <center>Hip</center>
                        </td>
                        <td> <input type="text" class="form-control"  name="Hip" placeholder="Enter the value" value="">
                      </tr>
                      <tr>
                        <td>
                          <center>Waist</center>
                        </td>
                        <td> <input type="text" class="form-control"  name="Waist" placeholder="Enter the value" value="">
                      </tr>
                      <tr>
                        <td>
                          <center>Thigh</center>
                        </td>
                        <td> <input type="text" class="form-control"  name="Thigh" placeholder="Enter the value" value="">
                      </tr>
                      <tr>
                        <td>
                          <center>Calf</center>
                        </td>
                        <td> <input type="text" class="form-control"  name="Calf" placeholder="Enter the value" value="">
                      </tr>
                      <tr>
                        <td></td>
                        <td> <button type="submit" name="savemess" class="btn btn-fill btn-info">Save</button>
                        </td>
                      </tr>
                    </table>
                  </div>
                </form>
                <?php
                 $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
                 $d = $date->format('Y-m-d');
                 $t = $date->format('H:i:s');
                  if(isset($_POST['savemess'])){
                   
                      extract($_POST);
                      echo $Blood;
                      $q1=mysqli_query($conn,"SELECT * from measurements where p_id='$user' and date='$d'");
                      $count=mysqli_num_rows($q1);
                      $row=mysqli_fetch_assoc($q1);
                      if($count==0){
                      $query=mysqli_query($conn,"INSERT into measurements(p_id,Blood,Pulse,Cholesterols,Weight,Chest,Arm,Waist,Thigh,Calf,date,Hip) values ('$user','$Blood','$Pulse','$Cholesterols','$Weight','$Chest','$Arm','$Waist','$Thigh','$Calf','$d','$Hip')");
                      echo "<script>window.location.assign('player-Measurements.php?edit=1')</script>";

                    }
                    elseif($row['date']= $d){
                      $q=mysqli_query($conn,"update measurements set Blood='$Blood', Pulse='$Pulse',Cholesterols='$Cholesterols',Weight='$Weight',Chest='$Chest',Arm='$Arm',Hip='$Hip',Waist='$Waist',Thigh='$Thigh',Calf='$Calf' where measurements.p_id='$user' and date='$d'");
                      echo "<script>window.location.assign('player-Measurements.php?update=1')</script>";

                  }
                  }
                ?>

              </div>
            </div>
          </div>
          <div class="col-md-2"></div>
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
    $(document).ready(function() {
      $(function() {
        $('.sidebar-wrapper ul li.s-map').addClass('active');
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