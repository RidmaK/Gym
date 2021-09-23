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
$user = $_SESSION['admin_id'];
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

            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <form action="search.php" method="post">
                                <input type="text" name="search" class="input" id="inlineFormInputGroup" placeholder="SEARCH">
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
                <?php
                if (isset($_GET['errorNewPass'])) {
                    echo ("<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">");
                    echo ("<strong>");
                    echo ("User ID does Not Match");
                    echo ("</strong>");
                    echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                    echo ("<span aria-hidden=\"true\">");
                    echo ("&times;");
                    echo ("</span>");
                    echo ("</button>");
                    echo ("</div>");
                }
                if (isset($_GET['errorPass'])) {
                    echo ("<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">");
                    echo ("<strong>");
                    echo ("Insert small Your Profile picture Correctly(small size)");
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
                    echo ("Registration Succesfully");
                    echo ("</strong>");
                    echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                    echo ("<span aria-hidden=\"true\">");
                    echo ("&times;");
                    echo ("</span>");
                    echo ("</button>");
                    echo ("</div>");
                }

                if (isset($_GET['dupid'])) {
                    echo ("<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">");
                    echo ("<strong>");
                    echo ("Registration Successfully.......,Data Update Successfully....");
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Edit Profile</h5>
                            </div>
                            <div class="card-body">
                                <form action="admin-user.php" method="post">
                                    <div class="row">
                                        <div class="col-md-3 pr-md-1">

                                            <div class="form-group">
                                                <label>Plan</label>
                                                <select class="form-control" name="plan" style="background: rgb(39, 132, 219);">

                                                    <option value="Silver">Silver</option>
                                                    <option value="Golden">Golden</option>
                                                    <option value="Platinum">Platinum</option>
                                                    <option value="Full">Full</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-md-1">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="michael23">
                                            </div>
                                        </div>
                                        <div class="col-md-5 pl-md-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email" required placeholder="mike@email.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" required name="fname" placeholder="First Name" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-1">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" required name="lname" placeholder="Last Name" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-1">
                                            <div class="form-group">
                                                <label>Birthday</label>
                                                <input type="date" class="form-control" required name="bdate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address" placeholder="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>NIC</label>
                                                <input type="text" name="nic" class="form-control" placeholder="City" placeholder="Mike">
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-md-1">
                                            <div class="form-group">
                                                <label>Blood Group</label>
                                                <select class="form-control" name="bgroup" style="background: rgb(39, 132, 219);">

                                                    <option value="A">A</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B">B</option>
                                                    <option value="B-">B-</option>
                                                    <option value="AB">AB</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="O">O</option>
                                                    <option value="O-">O-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-1">
                                            <div class="form-group">
                                                <label>Contact</label>
                                                <input type="text" required name="mobile" class="form-control" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="form-control" name="gender" style="background: rgb(39, 132, 219);">

                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>Weiht(Kg) category</label>
                                                <select class="form-control" name="weight" style="background: rgb(39, 132, 219);">

                                                    <option value="30-40">30-40</option>
                                                    <option value="40-50">40-50</option>
                                                    <option value="50-60">50-60</option>
                                                    <option value="60-70">60-70</option>
                                                    <option value="70-80">70-80</option>
                                                    <option value="80-90">80-90</option>
                                                    <option value="90-100">90-100</option>
                                                    <option value="100">100<</option> </select> </div> </div> </div> </div> <div class="card-footer">
                                                            <button type="submit" name="saveuser" class="btn btn-fill btn-primary">Save</button>
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
                                                <img class="avatar" src="./img/mike.jpg" alt="...">
                                                <h5 class="title">Mike Andrew</h5>
                                            </a>
                                            <p class="description">
                                                Ceo/Co-Founder
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
                    $('.sidebar-wrapper ul li.s-icon').addClass('active');
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