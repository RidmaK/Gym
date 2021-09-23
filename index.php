<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="iw-edge">

    <?php
    include './inc/basic/include-css.php';
    include './inc/basic/include-css-font.php';
    ?>

    <link rel="stylesheet" type="text/css" href="./assets/css/style-home.css">


    <title>PowerShark</title>

</head>

<body>

    <!-- Model-->
    <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="examplemodellable1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <section class="section feature-box my-5 pb-2" style="font-size: 15px;">

                    <!-- Section title -->


                    <!-- Nav tabs -->
                    <ul class="nav md-tabs nav-justified blue" role="tablist">

                        <li class="nav-item">

                            <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Login</a>

                        </li>

                        <!-- <li class="nav-item">

                            <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Sign-In</a>

                        </li> -->



                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">

                        <!-- Panel 1 -->
                        <div class="tab-pane fade in show active" id="panel1" role="tabpanel">

                            <br>



                            <style>
                                input {
                                    border: 1px solid black;
                                }
                            </style>

                            <div class=" mt-1 mb-1">
                                <form action="./php/login.php" method="POST">
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4"><label class="mt-2" style="font-weight:bolder">User Id :</label></div>
                                            <div class="col-md-7">
                                                <input type="text" style="border: 1px solid black;" name="user_id" class="form-control" placeholder="Enter User ID">
                                            </div>



                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4"><label class="mt-2" style="font-weight:bolder">Password :</label></div>
                                            <div class="col-md-7">
                                                <input type="password" style="border: 1px solid black;" name="password" class="form-control" placeholder="Enter Your Password">
                                            </div>



                                        </div>

                                    </div>

                                    <center>
                                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">close</button>
                                        <button type="submit" name="submit" class="btn btn-sm btn-primary">Login</button>
                                    </center>

                                </form>

                            </div>



                        </div>
                        <!-- Panel 1 -->

                        <!-- Panel 2 -->
                        <!-- <div class="tab-pane fade" id="panel2" role="tabpanel">

                            <br>

                            <div class=" mt-1 mb-1">

                                <form action="" method="post">
                                    <div class="modal-body">
                                    <div class="form-group row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4"> <label class="mt-2">User_id :</label></div>
                                            <div class="col-md-7">
                                                <input type="text" name="user_id" class="form-control" placeholder="Enter First Name">

                                            </div>



                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4"> <label class="mt-2">First Name :</label></div>
                                            <div class="col-md-7">
                                                <input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
                                            </div>



                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4"> <label class="mt-2">Last Name :</label></div>
                                            <div class="col-md-7">
                                                <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
                                            </div>



                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4"> <label class="mt-2">Email :</label></div>
                                            <div class="col-md-7">
                                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                            </div>



                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4"><label class="mt-2">Password :</label></div>
                                            <div class="col-md-7">
                                                <input type="password" name="password1" class="form-control" placeholder="Enter Password">

                                            </div>


                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4"> <label class="mt-2">Re-Password :</label></div>
                                            <div class="col-md-7">
                                                <input type="password" name="password2" class="form-control" placeholder="Enter Re-Password">
                                            </div>



                                        </div>

                                    </div>

                                    <center>
                                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">close</button>
                                        <button type="submit" name="registerbtn" class="btn btn-sm btn-primary">Sign-In</button>
                                    </center>

                                </form>

                            </div>

                            <?php include('./php/basic/connection.php'); ?>
                            <?php
                            if (isset($_POST['registerbtn'])) {
                                extract($_POST);
                                $password = md5($password2);
                                if ($password1 == $password2) {
                                    mysqli_query($conn, "insert into user (user_id,first_name,last_name,email,password,role_id) values('$user_id','$first_name','$last_name','$email','$password','3')");
                                }
                            }
                            ?>
                        </div>
                        <!-- Panel 2 -->
 


                    </div>
                    <!-- Tab panels -->

                </section>



            </div>
        </div>
    </div>

    <!----------------------------->

    <!-- header Section -->
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

            <div class="container">

                <a class="navbar-brand" href="#">PowerShark</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto" style="font-size:12px;">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#packeges">PACKEGES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reps">REPS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonials">REVIEW</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <button type="submit" class="btn-primary" style="border-radius:40px;padding:5px 15px" data-toggle="modal" data-target="#addadminprofile">Login</button><br><br>
                        </li>
                    </ul>
                    <ul class="navbar-nav nav-flex-icons">

                        <li class="nav-item">

                            <a class="nav-link"><i class="fab fa-facebook-f"></i></a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link"><i class="fab fa-twitter"></i></a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link"><i class="fab fa-instagram"></i></a>

                        </li>

                    </ul>

                </div>

            </div>

        </nav>
    </section>

    <!-- Welcome text -->
    <section id="welcome">
        <div class="container">
            <div class="welcome text-center wow fadeInUp">
                <center>
                    <h3 class="mb-3">Welcome to power Shark Fitness Centre</h3>

                    <a class="btn home-btn" style="font-size: 11px;width:150px;" type="submit" data-toggle="modal" data-target="#addadminprofile" href="">Start up</a>
                </center>
            </div>
        </div>
    </section>

    <!-- about -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow fadeInLeft">
                    <img src="./assets/img/11.jpg" class="img-fluid">
                </div>
                <div class="col-md-8 text-justify wow fadeInRight">
                    <h3>Knoladge, Skill & Hard Work</h3>
                    <p>With HTML you can create your own Web site.
                        This tutorial teaches you everything about HTML.
                        HTML is easy to learn - You will enjoy it.With HTML you can create your own Web site.
                        This tutorial teaches you everything about HTML.
                        HTML is easy to learn - You will enjoy it.With HTML</p>
                    <p>you can create your own Web site.
                        This tutorial teaches you everything about HTML.
                        HTML is easy to learn - You will enjoy it.</p>
                </div>
                <div class="col-md-8 text-justify wow fadeInLeft">
                    <h3>Work Hard In Silence</h3>
                    <p>With HTML you can create your own Web site.
                        This tutorial teaches you everything about HTML.
                        HTML is easy to learn - You will enjoy it.With HTML you can create your own Web site.
                        This tutorial teaches you everything about HTML.
                        HTML is easy to learn - You will enjoy it.With HTML</p>
                    <p>you can create your own Web site.
                        This tutorial teaches you everything about HTML.
                        HTML is easy to learn - You will enjoy it.</p>
                </div>
                <div class="col-md-4 wow fadeInRight">
                    <img src="./assets/img/12.jpg" class="img-fluid">
                </div>

            </div>
        </div>

    </section>

    <div class="sticky-bar">
        <ul>

            <li class="wow fadeInLeft"> <a href="#" class="btn btn-primary" style="font-size: 11px;"><b>HOME</b> </a></li>


            <li class="wow fadeInLeft"> <a href="#about" class="btn btn-danger" style="font-size: 11px;"><b>ABOUT</b> </a></li>


            <li class="wow fadeInLeft"> <a href="#features" class="btn btn-success" style="font-size: 11px;"><b>SERVICES</b> </a></li>


            <li class="wow fadeInLeft"> <a href="#packeges" class="btn btn-warning" style="font-size: 11px;"><b>PACKEGES</b> </a></li>


            <li class="wow fadeInLeft"><a href="#testimonials" class="btn btn-purple" style="font-size: 11px;"><b>REVIEW</b>
                </a></li>

            <li class="wow fadeInLeft"> <a href="#contact" class="btn btn-info" style="font-size: 11px;"><b>CONTACT</b> </a></li>
            <li class="wow fadeInLeft">
                <button type="submit" class="btn btn-orange" style="font-size: 11px;" data-toggle="modal" data-target="#addadminprofile">Login</button><br><br>
            </li>

        </ul>
    </div>

    <section id="features">
        <div class="container">

            <h2 class="text-uppercase text-center font-weight-bold my-4 wow fadeIn service" style="margin-top: 20px;z-index:9999999" data-wow-delay="0.2s">SERVICES
            </h2>
            <div class="row">

                <div class="col-md-4">
                    <center> <img src="./assets/img/7.png" style="width: 360px; height: 400px;margin-top:20px;" class="img-fluid  wow fadeInLeft"></center>
                </div>
                <div class="col-md-7 feature-box">
                    <div class="row row1 mt-4">
                        <div class="col-md-2">
                            <center> <i class="fa fa-trophy wow fadeInUp mt-4" style="font-size: 50px;"></i>
                            </center>
                        </div>
                        <div class="col-md-8 wow fadeInRight mt-1" style="margin-left:40px ">
                            <center>
                                <h4>Certified Trainers</h4>
                                <p style="font-size:12px">you can create your own Web site.
                                    This tutorial teaches you everything about HTML.</p>
                            </center>
                        </div>
                    </div>

                    <div class="row row1 mt-4">
                        <div class="col-md-2">
                            <center><i class="fa fa-heartbeat wow fadeInUp mt-4" style="font-size: 50px;"></i></center>
                        </div>
                        <div class="col-md-8 wow fadeInRight mt-1" style="margin-left:40px ">
                            <center>
                                <h4>Free Consultation</h4>
                                <p style="font-size:12px">you can create your own Web site.
                                    This tutorial teaches you everything about HTML.</p>
                            </center>
                        </div>
                    </div>

                    <div class="row row1 mt-4">
                        <div class="col-md-2">
                            <center> <i class="fa fa-clock wow fadeInUp mt-4 " style="font-size: 50px;"></i>
                            </center>
                        </div>
                        <div class="col-md-8 wow fadeInRight mt-1" style="margin-left:40px ">
                            <center>
                                <h4>Flexible Time</h4>
                                <p style="font-size:12px">you can create your own Web site.
                                    This tutorial teaches you everything about HTML.</p>
                            </center>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>

    <section id="packeges">
        <div class="container">
            <h2 class="text-uppercase text-center font-weight-bold  wow fadeIn" data-wow-delay="0.2s" style="margin-top:-50px;margin-bottom: 50px;font-size:50px;">PACKEGES
            </h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card wow fadeInUp mb-4">
                        <div class="img"><img src="./assets/img/3.jpg"></div>
                        <div class="details">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <div class="text-center">
                                <h2>Premium</h2>
                                <p>you can create your own Web site.
                                    This tutorial teaches you everything about HTMLyou can create your own Web site.
                                    This tutorial teaches you everything about HTML.</p>
                                <button type="button" class="btn btn-package" style="background-color:#e0e0d1;">get-start</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card wow fadeInUp mb-4">
                        <div class="img"><img src="./assets/img/4.jpg"></div>
                        <div class="details">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                        </div>
                        <div class="text-center">
                            <h2>golden</h2>
                            <p>you can create your own Web site.
                                This tutorial teaches you everything about HTMLyou can create your own Web site.
                                This tutorial teaches you everything about HTML.</p>
                            <button type="button" class="btn btn-package" style="background-color:#ffbf00;">get-start</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card wow fadeInUp mb-4">
                        <div class="img"><img src="./assets/img/6.jpg"></div>
                        <div class="details">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                        </div>
                        <div class="text-center">
                            <h2>Platinum</h2>
                            <p>you can create your own Web site.
                                This tutorial teaches you everything about HTMLyou can create your own Web site.
                                This tutorial teaches you everything about HTML.</p>
                            <button type="button" class="btn btn-package" style="background-color:#ff80ff;">get-start</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="portfolio" class="section-bg">
        <div class="container">

            <header class="section-header">

                <h2 class="text-uppercase text-center font-weight-bold  wow fadeIn mb-5" style="margin-top:-60px; " data-wow-delay="0.2s">Our Portfolio
                </h2>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="./assets/img/15.jpg" class="img-fluid" alt="">
                            <a href="./assets/img/15.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">App 1</a></h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="./assets/img/16.jpg" class="img-fluid" alt="">
                            <a href="./assets/img/16.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Web 3</a></h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="./assets/img/17.jpg" class="img-fluid" alt="">
                            <a href="./assets/img/17.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">App 2</a></h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="./assets/img/18.jpg" class="img-fluid" alt="">
                            <a href="./assets/img/18.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Card 2</a></h4>
                            <p>Card</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="./assets/img/19.jpg" class="img-fluid" alt="">
                            <a href="./assets/img/19.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Web 2</a></h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="./assets/img/20.jpg" class="img-fluid" alt="">
                            <a href="./assets/img/20.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">App 3</a></h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="./assets/img/21.jpg" class="img-fluid" alt="">
                            <a href="./assets/img/21.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Card 1</a></h4>
                            <p>Card</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="./assets/img/22.jpg" class="img-fluid" alt="">
                            <a href="./assets/img/22.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Card 3</a></h4>
                            <p>Card</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
                            <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Web 1</a></h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #portfolio -->
    <section id="testimonials" class="section py-5 mb-4">

        <!-- Section heading -->
        <h2 class="text-uppercase text-center font-weight-bold my-4 wow fadeIn" data-wow-delay="0.2s">Testimonials
        </h2>

        <hr class="between-sections">

        <!-- Carousel Wrapper -->
        <div class="wrapper-carousel-fix">

            <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel" data-interval="false">

                <!-- Slides -->
                <div class="carousel-inner" role="listbox">

                    <!-- First slide -->
                    <div class="carousel-item active">

                        <div class="testimonial mt-4 text-center">

                            <!-- Content -->
                            <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod

                                eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur

                                adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore

                                sit, aspernatur praesentium iste impedit quidem.</p>

                            <div class="mt-4">

                                <h5><strong>John Doe</strong></h5>

                                <p>Founder at ET Company</p>

                            </div>

                            <!-- Review -->
                            <div class="indigo-text">

                                <i class="fas fa-star"> </i>

                                <i class="fas fa-star"> </i>

                                <i class="fas fa-star"> </i>

                                <i class="fas fa-star"> </i>

                                <i class="fas fa-star-half-alt"> </i>

                            </div>

                        </div>

                    </div>
                    <!-- First slide -->

                    <!-- Second slide -->
                    <div class="carousel-item">

                        <div class="testimonial mt-4 text-center">

                            <!-- Content -->
                            <p><i class="fas fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut

                                odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.

                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed

                                quia non numquam eius modi tempora incidunt. </p>

                            <div class="mt-4">

                                <h5><strong>Maria Kate</strong></h5>

                                <p>Photographer at Studio LA</p>

                            </div>

                            <!-- Review -->
                            <div class="indigo-text">

                                <i class="fas fa-star"> </i>

                                <i class="fas fa-star"> </i>

                                <i class="fas fa-star"> </i>

                                <i class="fas fa-star"> </i>

                                <i class="fas fa-star"> </i>

                            </div>

                        </div>

                    </div>
                    <!-- Second slide -->

                    <!-- Third slide -->
                    <div class="carousel-item">

                        <div class="testimonial mt-4 text-center">

                            <!-- Content -->
                            <p><i class="fas fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse

                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in

                                culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus

                                error sit voluptatem accusantium doloremque laudantium.</p>

                            <div class="mt-4">

                                <h5><strong>Anna Deynah</strong></h5>

                                <p>Front-end Developer in NY</p>

                            </div>

                            <!-- Review -->
                            <div class="indigo-text">

                                <i class="fas fa-star"> </i>

                                <i class="fas fa-star"> </i>

                                <i class="fas fa-star"> </i>

                                <i class="fas fa-star"> </i>

                                <i class="far fa-star"> </i>

                            </div>

                        </div>

                    </div>
                    <!-- Third slide -->

                </div>
                <!-- Slides -->

                <!-- Controls -->
                <a class="carousel-control-prev left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">

                    <span class="icon-prev" aria-hidden="true"></span>

                    <span class="sr-only">Previous</span>

                </a>

                <a class="carousel-control-next right carousel-control" href="#carousel-example-1" role="button" data-slide="next">

                    <span class="icon-next" aria-hidden="true"></span>

                    <span class="sr-only">Next</span>

                </a>
                <!-- Controls -->

            </div>
            <!-- Carousel Wrapper -->

        </div>

    </section>

    <section class="contact" id="contact">
        <div class="container">
            <h1>Get In Touch</h1>
            <div class="row">
                <div class="col-md-6">
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="" placeholder="Phone No.">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="" placeholder="Email Id">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Your Message" rows="4"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">SEND MESSAGE</button>
                    </form>
                </div>
                <div class="col-md-6 contact-info">
                    <div class="follow"><b>Address:</b><i class="fa fa-map-marker"></i> No 175/2,Dewala Road,Mahena, Horana</div>
                    <div class="follow"><b>Phone:</b><i class="fa fa-phone"></i>+94716309982</div>
                    <div class="follow"><b>Email:</b><i class="fa fa-envelope"></i>rkatukorala.1996@gmail.com</div>
                    <div class="follow"><label><b>Get Social:</b></label>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <section id="footer">
        <div class="container text-center">
            <div class="row hed">
                <div class="col-md-12 text-center">
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-whatsapp"></i>
                </div>
            </div>
            <hr style="background-color: #fff;">
            <p class="text-center">all right reserved
                <br>design by Ridma Kanchana</p>
        </div>
    </section>


    <!--- script-->
    <?php include './inc/basic/include-js.php'; ?>

    <!-- Smooth scrol --->
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>

    <!-- Animation -->
    <script type="">
        new WOW().init();
    </script>


</body>

</html>