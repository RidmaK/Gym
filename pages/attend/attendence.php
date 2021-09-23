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
$user = $_SESSION['attend_id'];
include('../../php/basic/connection.php');
if (!isset($_SESSION['attend_id'])) {
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


            <!-- End Navbar -->
            


            <div class="content ">
                <center>
                    <div class="card" >
                    <?php
                if (isset($_GET['successed'])) {
                    echo ("<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">");
                    echo ("<strong>");
                    echo ("OUT Succesfully");
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
                if (isset($_GET['not'])) {
                    echo ("<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\" >");
                    echo ("<strong>");
                    echo ("Wrong ID Entered");
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
                            <h5 class="title">attendence</h5>
                        </div>
                        <div class="card-body">
                            <form action="at.php" method="post">
                                <div class="col-md-4 px-md-1">
                                    <div class="form-group">
                                        <label>IN/OUT</label>
                                        <input type="text"  class="input form-control" name="in" placeholder="Enter Your User ID">
                                    </div>
                                </div>
                                
                            </form>
                        </div>


                    </div>
                </center>

                <?php
                //footer
                //include './inc/footer.php';
                ?>
                <?php
                if (isset($_POST['saveuser'])) {
                    include('../../php/basic/connection.php');
                    extract($_POST);
                    $pwd = md5('1234');
                    echo $username;

                    echo $pwd;
                    $query = mysqli_query($conn, "INSERT into player (plan,username,email,fname,lname,bdate,address,nic,bgroup,mobile,gender,weight) values('$plan','$username','$email','$fname','$lname','$bdate','$address','$nic','$bgroup',$mobile,'$gender','$weight') ");
                    $query2 = mysqli_query($conn, "INSERT into user (user_id,email,first_name,last_name,bdate,address,nic,phone,gender,role,password,role_id) values('$username','$email','$fname','$lname','$bdate','$address','$nic',$mobile,'$gender','player','$pwd',3) ");
                    echo "<script>window.location.assign('admin-user.php?success=1')</script>";
                    /*
                        if($query2){
                        echo "nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn";
                    }else{
                        echo "yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy";
                    }
                    if($query){
                        echo "3333333333333333333333333333333333333333333333333333333333333333333333333333333333333333";
                    }else{
                        echo "222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222".mysqli_connect_error($conn);
                    }
                    */
                }
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