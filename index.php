<?php
include($_SERVER['DOCUMENT_ROOT'] . "/microlines3/cfg_mics.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Микролайнс - Bootstrap Personal & Business Theme</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="<?= CSS_PATH; ?>bootstrap.min.css">
        <!-- Main Style -->
        <link rel="stylesheet" type="text/css" href="<?= CSS_PATH; ?>main.css">
        <!-- Responsive Style -->
        <link rel="stylesheet" type="text/css" href="<?= CSS_PATH; ?>responsive.css">
        <!--Icon Fonts-->
        <link rel="stylesheet" media="screen" href="<?= FONT_PATH; ?>font-awesome/font-awesome.min.css" />
        <!-- Extras -->
        <link rel="stylesheet" type="text/css" href="<?= EXTRA_PATH; ?>animate.css">
        <link rel="stylesheet" type="text/css" href="<?= EXTRA_PATH; ?>lightbox.css">
        <!-- jQuery Load -->
        <script src="<?= JS_PATH; ?>jquery-min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-offset="20" data-target="#navbar">
        <!-- Nav Menu Section -->
        <div class="logo-menu">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="50">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header col-md-3">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#home"><i class="fa fa-briefcase"></i> MicroLines</a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav col-md-9 pull-right">
                            <li class="active"><a href="#hero-area"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#services"><i class="fa fa-cogs"></i> Services</a></li>
                            <li><a href="#portfolio"><i class="fa fa-flask"></i> Portfolio</a></li>
                            <li><a href="#clients"><i class="fa fa-puzzle-piece"></i> Clients</a></li>
                            <li><a href="#about"><i class="fa fa-info"></i> About</a></li>
                            <li><a href="#contact"><i class="fa fa-envelope"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Nav Menu Section End -->

        <!-- Hero Area Section -->

        <section id="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">Microlines - walks with you</h1>
                        <h2 class="subtitle">Start your Business or Personal site right now!</h2>

                        <img class="col-md-6 col-sm-6 col-xs-12 animated fadeInLeft" src="<?= IMG_PATH; ?>hero/macbook.png" alt="">

                        <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInRight delay-0-5">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                            <a href="#" class="btn btn-common btn-lg">Donload Now!</a>
                            <a href="#" class="btn btn-primary btn-lg">Learn More</a>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Hero Area Section End-->

        <!-- Service Section -->
        <section id="services">
            <div class="container text-center">
                <div class="row">
                    <h1 class="title">What we do</h1>
                    <h2 class="subtitle">we make various type of applications</h2>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="service-item">
                            <img src="<?= IMG_PATH; ?>services/responsive.png" alt="">
                            <h3>Fully Responsive Mobile Applications</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="service-item">
                            <img src="<?= IMG_PATH; ?>services/bs3.png" alt="">
                            <h3>Full Stack Software Frameworks</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="service-item">
                            <img src="<?= IMG_PATH; ?>services/free.png" alt="">
                            <h3>100% secure e-commercial applications</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Section End -->

        <!-- Portfolio Section -->
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <h1 class="title">Portfolio</h1>
                    <h2 class="subtitle">Please take little preview these are made by us</h2>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="portfolio-item wow fadeInLeft" data-wow-delay=".5s">
                            <a href="#"><img src="<?= IMG_PATH; ?>portfolio/img1.jpg" alt=""></a>
                            <div class="overlay">
                                <div class="icons">
                                    <a data-lightbox="image1" href="<?= IMG_PATH; ?>portfolio/img1.jpg" class="preview"><i class="fa fa-search-plus fa-4x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="portfolio-item wow fadeInLeft" data-wow-delay=".7s">
                            <a href="#"><img src="<?= IMG_PATH; ?>portfolio/img2.jpg" alt=""></a>
                            <div class="overlay">
                                <div class="icons">
                                    <a data-lightbox="image1" href="<?= IMG_PATH; ?>portfolio/img2.jpg" class="preview"><i class="fa fa-search-plus fa-4x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="portfolio-item wow fadeInLeft" data-wow-delay=".9s">
                            <a href="#"><img src="<?= IMG_PATH; ?>portfolio/img3.jpg" alt=""></a>
                            <div class="overlay">
                                <div class="icons">
                                    <a data-lightbox="image1" href="<?= IMG_PATH; ?>portfolio/img3.jpg" class="preview"><i class="fa fa-search-plus fa-4x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.1s">
                        <div class="portfolio-item">
                            <a href="#"><img src="<?= IMG_PATH; ?>portfolio/img4.jpg" alt=""></a>
                            <div class="overlay">
                                <div class="icons">
                                    <a data-lightbox="image1" href="<?= IMG_PATH; ?>portfolio/img4.jpg" class="preview"><i class="fa fa-search-plus fa-4x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.3s">
                        <div class="portfolio-item">
                            <a href="#"><img src="<?= IMG_PATH; ?>portfolio/img5.jpg" alt=""></a>
                            <div class="overlay">
                                <div class="icons">
                                    <a data-lightbox="image1" href="<?= IMG_PATH; ?>portfolio/img5.jpg" class="preview"><i class="fa fa-search-plus fa-4x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.5s">
                        <div class="portfolio-item">
                            <a href="#"><img src="<?= IMG_PATH; ?>portfolio/img6.jpg" alt=""></a>
                            <div class="overlay">
                                <div class="icons">
                                    <a data-lightbox="image1" href="<?= IMG_PATH; ?>portfolio/img6.jpg" class="preview"><i class="fa fa-search-plus fa-4x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Portfolio Section End -->

        <!-- Client Section -->
        <section id="clients">
            <div class="container">
                <div class="row">
                    <h1 class="title">Recent clients list</h1>
                    <h2 class="subtitle">Lorem Ipsum is simply dummy text</h2>
                    <div class="wow fadeInDown">
                        <img class="col-md-3 col-md-3 col-sm-3 col-xs-12" src="<?= IMG_PATH; ?>clients/img1.png" alt="client-1">
                        <img class="col-md-3 col-md-3 col-sm-3 col-xs-12" src="<?= IMG_PATH; ?>clients/img2.png" alt="client-2">
                        <img class="col-md-3 col-md-3 col-sm-3 col-xs-12" src="<?= IMG_PATH; ?>clients/img3.png" alt="client-3">
                        <img class="col-md-3 col-md-3 col-sm-3 col-xs-12" src="<?= IMG_PATH; ?>clients/img4.png" alt="client-4">
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Section End -->

        <!-- About Section -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <h1 class="title">бидний тухай</h1>
                    <h2 class="subtitle">Lorem Ipsum is simply dummy text</h2>
                    <div class="col-md-8 col-sm-12">
                        <p>
                            A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                        </p>
                    </div>
                    <img class="col-md-4 col-md-4 col-sm-12 col-xs-12" src="<?= IMG_PATH; ?>about/graph.png" alt="">
                </div>
            </div>
        </section>
        <!-- About Section End -->

        <!-- Conatct Section -->
        <section id="contact">
            <div class="container text-center">
                <div class="row">
                    <h1 class="title">холбоо барих</h1>
                    <h2 class="subtitle">Lorem Ipsum is simply dummy text</h2>
                    <form role="form" class="contact-form" method="post">
                        <div class="col-md-6 wow fadeInLeft" data-wow-delay=".5s">
                            <div class="form-group">
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="controls">
                                    <input type="email" class="form-control email" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="controls">
                                    <input type="text" class="form-control requiredField" placeholder="Subject" name="subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="controls">
                                    <textarea rows="7" class="form-control" placeholder="Message" name="message"></textarea>
                                </div>
                            </div>
                            <button type="submit" id="submit" class="btn btn-lg btn-common">Send</button><div id="success" style="color:#34495e;"></div>
                        </div>
                    </form>

                    <div class="col-md-6 wow fadeInRight">
                        <div class="social-links">
                            <a class="social" href="#" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                            <a class="social" href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                            <a class="social" href="#" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>
                            <a class="social" href="#" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                        </div>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>303, СкайПлаза, Олимпын гудамж, Улаанбаатар, Монгол</p>
                            <p><i class="fa fa-envelope"></i> info@microlines.biz</p>
                        </div>
                        <p>
                            A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit.<br>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Conatct Section End-->
        <div id="copyright">
            <div class="container">
                <div class="col-md-10"><p>© Микролайнс 2016 All right reserved. Design & Developed by <a href="http://microlines.biz">MicroLines</a></p></div>
                <div class="col-md-2">
                    <span class="to-top pull-right"><a href="#hero-area"><i class="fa fa-angle-up fa-2x"></i></a></span>
                </div>
            </div>
        </div>
        <!-- Copyright Section End-->

        <!-- Bootstrap JS -->
        <script src="<?= JS_PATH; ?>bootstrap.min.js"></script>

        <!-- Smooth Scroll -->
        <!-- Smooth Scroll -->
        <script src="<?= JS_PATH; ?>smooth-scroll.js"></script>
        <script src="<?= JS_PATH; ?>lightbox.min.js"></script>

        <!-- All JS plugin Triggers -->
        <script src="<?= JS_PATH; ?>main.js"></script>
    </body>
</html>