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
if (!isset($_SESSION['admin_id'])) {
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
    PowerSheark
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

      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <form action="search.php" method="post">
                <input type="text" name="search" class="input" style="border:none;box-shadow:none;"
                  id="inlineFormInputGroup" placeholder="SEARCH">
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
          <div class="col-md-6">
            <div class="card">
              <?php
              if (isset($_GET['successed'])) {
                echo ("<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">");
                echo ("<strong>");
                echo ("Paied Succesfully");
                echo ("</strong>");
                echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                echo ("<span aria-hidden=\"true\">");
                echo ("&times;");
                echo ("</span>");
                echo ("</button>");
                echo ("</div>");
              }
              if (isset($_GET['success'])) {
                echo ("<div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\" >");
                echo ("<strong>");
                echo ("IN Succesfully");
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
                <h5 class="title">Payments</h5>
              </div>
              <div class="card-body">
                <form action="" method="post">
                  <div class="row">

                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="User_id">
                      </div>
                    </div><br>
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label>Payment</label>
                        <input type="text" class="form-control" name="payment" placeholder="Amount">
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" name="pay" class="btn btn-fill btn-info btn-sm mt-3">Save</button>
                    </div>
                  </div>
                </form>
                <?php
                $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
                $d = $date->format('Y-m-d');
                $t = $date->format('H:i:s');
               
                if (isset($_POST['pay'])) {
                  extract($_POST);
                  $res4=mysqli_query($conn,"SELECT * from payments where player_id='$username' and date='$d'");
                  $count=mysqli_num_rows($res4);
                 
                  echo $count;

                  if($count==0){
                    $query = mysqli_query($conn, "INSERT into payments(player_id,date,amount,status) values('$username','$d','$payment',1)");

                  }
                  else if($count>=1){
                  $res3 = mysqli_query($conn, "UPDATE payments SET amount='$payment',date='$d' WHERE payments.player_id='{$username}' and date='$d'");
                  echo "<script>window.location.assign('admin-Payments.php?successed=1')</script>";

                }
                  echo "<script>window.location.assign('admin-Payments.php?successed=1')</script>";
                }
                ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card" style="padding: 20px;">
              <?php
               
              if (isset($_GET['check'])) {
                echo ("<div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\" >");
                echo ("<strong>");
                echo ("Bar added Succesfully");
                echo ("</strong>");
                echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                echo ("<span aria-hidden=\"true\">");
                echo ("&times;");
                echo ("</span>");
                echo ("</button>");
                echo ("</div>");
              }
              if (isset($_GET['sup'])) {
                echo ("<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\" >");
                echo ("<strong>");
                echo ("Suppliment added Succesfully");
                echo ("</strong>");
                echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                echo ("<span aria-hidden=\"true\">");
                echo ("&times;");
                echo ("</span>");
                echo ("</button>");
                echo ("</div>");
              }
              ?>
              <div class="row">
                <form action="" method="post">
                  <div class="col-md-6">
                    <?php
                    $w=mysqli_query($conn,"SELECT * from sells where date='$d'");
                    $rw=mysqli_fetch_assoc($w);
                    $w1=mysqli_query($conn,"SELECT * from sells1 where date='$d'");
                    $rw1=mysqli_fetch_assoc($w1);
                  ?>
                    <div class="form-group">
                      <label><a onclick="demo.showNotification('top','right')">Suppliments</a></label>
                      <input type="text" style="width: 200px;" class="form-control" name="spay"
                        placeholder="<?php echo  "&#x20A8; ".$rw['Amount'];?>">

                    </div>
                  </div>
                  <div class="col-md-4">
                    <button type="submit" name="sup" class="btn btn-fill btn-success btn-sm">ADD</button>


                  </div>
                </form>
                <form action="" method="post">
                  <div class="col-md-6">

                    <div class="form-group">
                      <label>Bar</label>
                      <input type="text" style="width: 200px;" class="form-control" name="cool"
                        placeholder="<?php echo  "&#x20A8; ".$rw1['Amount'];?>">

                    </div>
                  </div>
                  <div class="col-md-4">
                    <button type="submit" name="pays" class="btn btn-fill btn-success btn-sm">ADD</button><br>

                    <?php
                    $sumsup = 0;
                    $sumbar = 0;
                    if (isset($_POST['sup'])) {
                      extract($_POST);
                      $qs = mysqli_query($conn, "INSERT into sells(item_id,Amount,date) values('suppliment',0,'$d')");
                      $qs1 = mysqli_query($conn, "SELECT * from sells where date='$d' and item_id='suppliment'");
                      $rs = mysqli_fetch_array($qs1);
                      if ($rs['date'] = $d) {

                        $sumsup = $rs['Amount'] + $spay;
                        $res5 = mysqli_query($conn, "UPDATE sells SET Amount='$sumsup' WHERE sells.item_id='suppliment' and sells.date='$d'");
                        echo "<script>window.location.assign('admin-Payments.php?sup=1')</script>";
                      }
                     $rs['Amount'];
                    } elseif (isset($_POST['pays'])) {
                      extract($_POST);
                      $qs = mysqli_query($conn, "INSERT into sells1(item_id,Amount,date) values('bar',0,'$d')");
                      $qs2 = mysqli_query($conn, "SELECT * from sells1 where date='$d' and item_id='bar'");
                      $rs1 = mysqli_fetch_array($qs2);
                      if ($rs1['date'] = $d) {
                        $sumbar = $rs1['Amount'] + $cool;
                        $res4 = mysqli_query($conn, "UPDATE sells1 SET Amount='$sumbar' WHERE sells1.item_id='bar' and sells1.date='$d'");
                        echo "<script>window.location.assign('admin-Payments.php?check=1')</script>";
                      }
                    $rs1['Amount'];
                    }
                    ?>
                  </div>
                </form>
              </div>
              <div class="row">

              </div>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-md-12">
            <div class="card ">

              <div class="card-header">
                <h4 class="card-title"> Payment Detailes</h4>
              </div>
              <div class="card-body">
                <form action="" method="post">
                  <div class="row">

                    <div class="col-md-2 pr-md-1">
                      <div class="form-group">
                        <label>Start Date</label>
                        <input type="date" class="form-control" name="sdate" placeholder="User_id">
                      </div>
                    </div>
                    <div class="col-md-2 px-md-1">
                      <div class="form-group">
                        <label>End Date</label>
                        <input type="date" class="form-control" name="edate" placeholder="Amount">
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" name="veiw" class="btn btn-fill btn-sm btn-success mt-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
                    </div>

                </form>
                <?php
                if (isset($_POST['veiw'])) {
                  extract($_POST);
                  // echo $sdate;
                  $q1 = mysqli_query($conn, "SELECT * from payments,player where player.username=payments.player_id AND date between '$sdate' and '$edate'");
                } else {
                  $q1 = mysqli_query($conn, "SELECT * from payments,player where player.username=payments.player_id");
                } ?>

                <div class="table-responsive" style="padding: 30px;">
                <?php 
                  if (isset($_GET['delete'])) {
                    echo ("<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\" >");
                    echo ("<strong>");
                    echo ("Payment deleted Succesfully");
                    echo ("</strong>");
                    echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                    echo ("<span aria-hidden=\"true\">");
                    echo ("&times;");
                    echo ("</span>");
                    echo ("</button>");
                    echo ("</div>");
                  }
                ?>
                  <table class="table tablesorter table-striped" id="datatableid">
                    <thead class=" text-primary">
                      <tr>
                        <th>User_id</th>
                        <th>Full Name</th>
                        <th>Date</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Action</th>


                      </tr>
                    </thead>
                    <?php
                    if ($q1) {
                      $sum = 0;
                      while ($row1 = mysqli_fetch_assoc($q1)) {
                        $sum = $sum + $row1['amount'];

                    ?>

                    <tr>
                      <td><?php echo $row1['username']; ?></td>
                      <td><?php echo $row1['fname'] . " " . $row1['lname']; ?></td>
                      <td><?php echo $row1['date']; ?></td>
                      <td><?php echo $row1['amount']; ?></td>
                      <td><?php
                              if ($row1['status'] = 1) {
                                echo "Paied";
                              } else {
                                echo "Not Paied";
                              } ?></td>

                      <td>
                        <a href="#deletepayments<?php echo $row1['p_id']; ?>" data-toggle="modal"
                          class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <?php include('payment_modal.php'); ?>
                      </td>


                    </tr>

                    <?php
                      }
                    }
                    ?>
                    <tbody> </tbody>
                  </table>
                  <table cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                      <tr>
                        <td class="gutter">
                          <div class="line number1 index0 alt2" style="display: none;">1</div>
                        </td>
                        <td class="code">
                          <div class="container" style="display: none;">
                            <div class="line number1 index0 alt2" style="display: none;">&nbsp;</div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <?php
                  echo "Total Payments amount is &#x20A8; " . $sum;
                  ?>
                </div>

              </div>
            </div>
          </div>

        </div>





      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card ">
            <div class="card-header">
              <h4 class="card-title"> Suppliment Details</h4>
            </div>
            <?php
              $st=mysqli_query($conn,"SELECT * from sells")?>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table tablesorter table-striped" id="datatableid1">
                  <thead class=" text-primary">
                    <tr>
                      <th>Item_id</th>
                      <th>Amount</th>
                      <th>Date</th>

                    </tr>
                  </thead>
                  <?php
                    $sum1=0;
                    if ($st) {
                      while ($rows = mysqli_fetch_assoc($st)) {
                        $sum1 = $sum1 + $rows['Amount'];

                    ?>

                  <tr>
                    <td><?php echo $rows['item_id']; ?></td>
                    <td><?php echo $rows['Amount']; ?></td>
                    <td><?php echo $rows['date']; ?></td>


                  </tr>

                  <?php
                      }
                    }
                    ?>

                </table>
                <table cellspacing="0" cellpadding="0" border="0">
                  <tbody>
                    <tr>
                      <td class="gutter">
                        <div class="line number1 index0 alt2" style="display: none;">1</div>
                      </td>
                      <td class="code">
                        <div class="container" style="display: none;">
                          <div class="line number1 index0 alt2" style="display: none;">&nbsp;</div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <?php
                  echo "Total Payments amount is &#x20A8; " . $sum1;
                  ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card ">
            <div class="card-header">
              <h4 class="card-title"> Bar Details</h4>
            </div>
            <?php
              $br=mysqli_query($conn,"SELECT * from sells1")?>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table tablesorter table-striped" id="datatableid2">
                  <thead class=" text-primary">
                    <tr>
                      <th>Item_id</th>
                      <th>Amount</th>
                      <th>Date</th>

                    </tr>
                  </thead>
                  <?php
                    $sum2=0;
                    if ($br) {
                      while ($rowb = mysqli_fetch_assoc($br)) {
                        $sum2 = $sum2 + $rowb['Amount'];

                    ?>

                  <tr>
                    <td><?php echo $rowb['item_id']; ?></td>
                    <td><?php echo $rowb['Amount']; ?></td>
                    <td><?php echo $rowb['date']; ?></td>

                  </tr>

                  <?php
                      }
                    }
                    ?>

                </table>
                <table cellspacing="0" cellpadding="0" border="0">
                  <tbody>
                    <tr>
                      <td class="gutter">
                        <div class="line number1 index0 alt2" style="display: none;">1</div>
                      </td>
                      <td class="code">
                        <div class="container" style="display: none;">
                          <div class="line number1 index0 alt2" style="display: none;">&nbsp;</div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <?php
                  echo "Total Payments amount is &#x20A8; " . $sum2;
                  ?>
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
    $(document).ready(function () {
      $(function () {
        $('.sidebar-wrapper ul li.s-map').addClass('active');
      });
    });
  </script>
  <script>
    $(document).ready(function () {

      $('#datatableid').DataTable();
      $('#datatableid1').DataTable();
      $('#datatableid2').DataTable();

    });
  </script>

  <script>
    $(document).ready(function () {
      $().ready(function () {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function (event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function () {
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

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function () {
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
          var simulateWindowResize = setInterval(function () {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function () {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function () {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function () {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function () {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function () {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function () {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>

  <script>
    $(document).ready(function () {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>

</body>

</html>