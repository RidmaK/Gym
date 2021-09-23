<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* shedule Page: https://www.creative-tim.com/shedule/black-dashboard
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
    <?php include('header.php'); ?>

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
                                <input type="text" name="search" class="input" style="border:none;box-shadow:none;" id="inlineFormInputGroup" placeholder="SEARCH">
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
                <div class="responsive main_content card" style="margin-right: 20px;padding:20px;padding-top:20px;">
                    <?php
                    if (isset($_GET['success'])) {
                        echo ("<div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\" >");
                        echo ("<strong>");
                        echo ("New Shedule added Succesfully");
                        echo ("</strong>");
                        echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                        echo ("<span aria-hidden=\"true\">");
                        echo ("&times;");
                        echo ("</span>");
                        echo ("</button>");
                        echo ("</div>");
                    }
                    if (isset($_GET['delete'])) {
                        echo ("<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\" >");
                        echo ("<strong>");
                        echo ("Shedule deleted Succesfully");
                        echo ("</strong>");
                        echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                        echo ("<span aria-hidden=\"true\">");
                        echo ("&times;");
                        echo ("</span>");
                        echo ("</button>");
                        echo ("</div>");
                    }
                    if (isset($_GET['edit'])) {
                        echo ("<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\" >");
                        echo ("<strong>");
                        echo ("Shedule Edited Succesfully");
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
                        <div class="col-md-12">
                            <select id="catList" class="btn btn-default">
                                <option value="0">All Category</option>
                                <?php
                                $sql = "select * from category";
                                $catquery = $conn->query($sql);
                                while ($catrow = $catquery->fetch_array()) {
                                    $catid = isset($_GET['category']) ? $_GET['category'] : 0;
                                    $selected = ($catid == $catrow['categoryid']) ? " selected" : "";
                                    echo "<option$selected value=" . $catrow['categoryid'] . ">" . $catrow['catname'] . "</option>";
                                }
                                ?>
                            </select>
                            <a href="#addshedule" data-toggle="modal" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus" ></span>Add shedule</a>
                            <a href="#addcategory" data-toggle="modal" class="pull-right btn btn-sm btn-info"><span class="glyphicon glyphicon-plus"></span>Add Category</a>

                        </div>
                    </div>
                    <div style="margin-top:10px;">
                        <table class="table table-striped" style="width: 100%;">
                            <thead>

                                <th>shedule Name</th>
                                <th>Day 1</th>
                                <th>Day 2</th>
                                <th>Day 3</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                $where = "";
                                if (isset($_GET['category'])) {
                                    $catid = $_GET['category'];
                                    $where = " WHERE shedule.categoryid = $catid";
                                }
                                $sql = "select * from shedule left join category on category.categoryid=shedule.categoryid $where order by shedule.categoryid asc, shedule_name asc";
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_array()) {
                                ?>
                                    <tr>

                                        <td><?php echo $row['shedule_name']; ?></td>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="day1" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="day2" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="day3" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#editshedule<?php echo $row['sheduleid']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span>edit</a> || <a href="#deleteshedule<?php echo $row['sheduleid']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <?php include('shedule_modal.php'); ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <?php include('modal.php'); ?>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#catList").on('change', function() {
                                if ($(this).val() == 0) {
                                    window.location = 'admin-shedule.php';
                                } else {
                                    window.location = 'admin-shedule.php?category=' + $(this).val();
                                }
                            });
                        });
                    </script>
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