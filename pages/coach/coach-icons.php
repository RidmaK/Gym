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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">100 Awesome Nucleo Icons</h5>
                                <p class="category">Handcrafted by our friends from <a href="https://nucleoapp.com/?ref=1712">NucleoApp</a></p>
                            </div>
                            <div class="card-body all-icons">
                                <div class="row">
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-alert-circle-exc"></i>
                                            <p>icon-alert-circle-exc</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-align-center"></i>
                                            <p>icon-align-center</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-align-left-2"></i>
                                            <p>icon-align-left-2</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-app"></i>
                                            <p>icon-app</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-atom"></i>
                                            <p>icon-atom</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-attach-87"></i>
                                            <p>icon-attach-87</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-badge"></i>
                                            <p>icon-badge</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-bag-16"></i>
                                            <p>icon-bag-16</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-bank"></i>
                                            <p>icon-bank</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-basket-simple"></i>
                                            <p>icon-basket-simple</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-bell-55"></i>
                                            <p>icon-bell-55</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-bold"></i>
                                            <p>icon-bold</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-book-bookmark"></i>
                                            <p>icon-book-bookmark</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-double-right"></i>
                                            <p>icon-double-right</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-bulb-63"></i>
                                            <p>icon-bulb-63</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-bullet-list-67"></i>
                                            <p>icon-bullet-list-67</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-bus-front-12"></i>
                                            <p>icon-bus-front-12</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-button-power"></i>
                                            <p>icon-button-power</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-camera-18"></i>
                                            <p>icon-camera-18</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-calendar-60"></i>
                                            <p>icon-calendar-60</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-caps-small"></i>
                                            <p>icon-caps-small</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-cart"></i>
                                            <p>icon-cart</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-chart-bar-32"></i>
                                            <p>icon-chart-bar-32</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-chart-pie-36"></i>
                                            <p>icon-chart-pie-36</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-chat-33"></i>
                                            <p>icon-chat-33</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-check-2"></i>
                                            <p>icon-check-2</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-cloud-download-93"></i>
                                            <p>icon-cloud-download-93</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-cloud-upload-94"></i>
                                            <p>icon-cloud-upload-94</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-coins"></i>
                                            <p>icon-coins</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-compass-05"></i>
                                            <p>icon-compass-05</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-controller"></i>
                                            <p>icon-controller</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-credit-card"></i>
                                            <p>icon-credit-card</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-delivery-fast"></i>
                                            <p>icon-delivery-fast</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-email-85"></i>
                                            <p>icon-email-85</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-gift-2"></i>
                                            <p>icon-gift-2</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-globe-2"></i>
                                            <p>icon-globe-2</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-headphones"></i>
                                            <p>icon-headphones</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-heart-2"></i>
                                            <p>icon-heart-2</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-html5"></i>
                                            <p>icon-html5</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-double-left"></i>
                                            <p>icon-double-left</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-image-02"></i>
                                            <p>icon-image-02</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-istanbul"></i>
                                            <p>icon-istanbul</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-key-25"></i>
                                            <p>icon-key-25</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-laptop"></i>
                                            <p>icon-laptop</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-light-3"></i>
                                            <p>icon-light-3</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-link-72"></i>
                                            <p>icon-link-72</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-lock-circle"></i>
                                            <p>icon-lock-circle</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-map-big"></i>
                                            <p>icon-map-big</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-minimal-down"></i>
                                            <p>icon-minimal-down</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-minimal-left"></i>
                                            <p>icon-minimal-left</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-minimal-right"></i>
                                            <p>icon-minimal-right</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-minimal-up"></i>
                                            <p>icon-minimal-up</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-mobile"></i>
                                            <p>icon-mobile</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-molecule-40"></i>
                                            <p>icon-molecule-40</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-money-coins"></i>
                                            <p>icon-money-coins</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-notes"></i>
                                            <p>icon-notes</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-palette"></i>
                                            <p>icon-palette</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-paper"></i>
                                            <p>icon-paper</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-pin"></i>
                                            <p>icon-pin</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-planet"></i>
                                            <p>icon-planet</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-puzzle-10"></i>
                                            <p>icon-puzzle-10</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-pencil"></i>
                                            <p>icon-pencil</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-satisfied"></i>
                                            <p>icon-satisfied</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-scissors"></i>
                                            <p>icon-scissors</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-send"></i>
                                            <p>icon-send</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-settings-gear-63"></i>
                                            <p>icon-settings-gear-63</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-settings"></i>
                                            <p>icon-settings</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-wifi"></i>
                                            <p>icon-wifi</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-single-02"></i>
                                            <p>icon-single-02</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-single-copy-04"></i>
                                            <p>icon-single-copy-04</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-sound-wave"></i>
                                            <p>icon-sound-wave</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-spaceship"></i>
                                            <p>icon-spaceship</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-square-pin"></i>
                                            <p>icon-square-pin</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-support-17"></i>
                                            <p>icon-support-17</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-tablet-2"></i>
                                            <p>icon-tablet-2</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-tag"></i>
                                            <p>icon-tag</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-tap-02"></i>
                                            <p>icon-tap-02</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-tie-bow"></i>
                                            <p>icon-tie-bow</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-time-alarm"></i>
                                            <p>icon-time-alarm</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-trash-simple"></i>
                                            <p>icon-trash-simple</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-trophy"></i>
                                            <p>icon-trophy</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-tv-2"></i>
                                            <p>icon-tv-2</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-upload"></i>
                                            <p>icon-upload</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-user-run"></i>
                                            <p>icon-user-run</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-vector"></i>
                                            <p>icon-vector</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-video-66"></i>
                                            <p>icon-video-66</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-wallet-43"></i>
                                            <p>icon-wallet-43</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-volume-98"></i>
                                            <p>icon-volume-98</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-watch-time"></i>
                                            <p>icon-watch-time</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-world"></i>
                                            <p>icon-world</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-zoom-split"></i>
                                            <p>icon-zoom-split</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-refresh-01"></i>
                                            <p>icon-refresh-01</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-refresh-02"></i>
                                            <p>icon-refresh-02</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-shape-star"></i>
                                            <p>icon-shape-star</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-components"></i>
                                            <p>icon-components</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-triangle-right-17"></i>
                                            <p>icon-triangle-right-17</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-button-pause"></i>
                                            <p>icon-button-pause</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-simple-remove"></i>
                                            <p>icon-simple-remove</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-simple-add"></i>
                                            <p>icon-simple-add</p>
                                        </div>
                                    </div>
                                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-simple-delete"></i>
                                            <p>icon-simple-delete</p>
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