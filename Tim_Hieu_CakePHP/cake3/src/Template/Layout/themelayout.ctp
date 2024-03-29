<!doctype html>
 <html class="no-js" lang="">
    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo isset($title) ? $title : '' ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <?= $this->Html->css(['fonticons.css', 'stylesheet.css', 'font-awesome.min.css', 'bootstrap.min.css', 'plugins.css', 'style.css', 'responsive.css'])?>

        <?= $this->Html->script('vendor/modernizr-2.8.3-respond-1.4.2.min.js')?>
        <!-- <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->


        <!--For Plugins external css-->
        <!-- <link rel="stylesheet" href="assets/css/plugins.css" /> -->

        <!--Theme custom css -->
        <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

        <!--Theme Responsive css-->
        <!-- <link rel="stylesheet" href="assets/css/responsive.css" /> -->

        <!-- <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script> -->
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header id="main_menu" class="header navbar-fixed-top">            
            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu">
                            <nav class="navbar navbar-default" id="navmenu">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#home">
                                            <!-- <img src="assets/images/logo.png"/> -->
                                            <img src="<?=$baseUrl?>webroot/img/logo.png"/>
                                        </a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->



                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#home">Home</a></li>
                                            <li><a href="#service">Service</a></li>
                                            <li><a href="#portfolio">portfolio</a></li>
                                            <li><a href="#counter">Counter Us</a></li>
                                            <li><a href="#contact">Contact</a></li>
                                        </ul>    
                                    </div>

                                </div>
                            </nav>
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->





        <section id="home" class="home">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="main_home_slider text-center">
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h1>Have an amazing business meeting</h1>
                                        <p class="subtitle">Small business with big dreams</p>

                                        <div class="home_btn">
                                            <a href="" class="btn btn-md">Learn More</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h1>Have an amazing business meeting</h1>
                                        <p class="subtitle">Small business with big dreams</p>

                                        <div class="home_btn">
                                            <a href="" class="btn btn-md">Learn More</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h1>Have an amazing business meeting</h1>
                                        <p class="subtitle">Small business with big dreams</p>

                                        <div class="home_btn">
                                            <a href="" class="btn btn-md">Learn More</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="main_service_area sections"> 
                        <div class="col-sm-6">
                            <div class="signle_service_left">
                                <h2>What
                                    We 
                                    Do</h2>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single_service_right">
                                <div class="single_service">
                                    <div class="single_service_icon">
                                        <i class="lnr lnr-laptop-phone"></i>
                                    </div>
                                    <div class="single_service_content">
                                        <h3>Web Design</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="single_service_icon">
                                        <i class="lnr lnr-screen"></i>
                                    </div>
                                    <div class="single_service_content">
                                        <h3>UI/UX Design</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="single_service_icon">
                                        <i class="lnr lnr-picture"></i>
                                    </div>
                                    <div class="single_service_content">
                                        <h3>Photography</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="single_service_icon">
                                        <i class="lnr lnr-laptop-phone"></i>
                                    </div>
                                    <div class="single_service_content">
                                        <h3>App Development</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="choose" class="choose">
            <div class="container-fluid">
                <div class="row">
                    <div class="main_choose_area sections">
                        <div class="col-sm-7 col-sm-offset-1">
                            <div class="main_choose_content text-left">
                                <div class="single_choose_content">
                                    <h1>Exceptional Customer Service</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                        sed do eiusmod tempor Lorem ipsum dolor sit amet
                                        consectetur adipiscing elit.</p>

                                    <a href="" class="btn btn-larg">Need to help? lets Chat <i class="lnr lnr-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="main_mix_content text-center sections">
                        <div class="head_title">
                            <h2>Our Portfolio</h2>
                        </div>
                        <div class="main_mix_menu">
                            <ul>
                                <li class="btn btn-primary filter" data-filter="all">All</li>
                                <li class="btn btn-primary filter" data-filter=".cat1">Web</li>
                                <li class="btn btn-primary filter" data-filter=".cat2">UI/UX</li>
                                <li class="btn btn-primary filter" data-filter=".cat3">Photography</li>
                                <li class="btn btn-primary filter" data-filter=".cat4">Branding</li>
                            </ul>
                        </div>

                        <div id="mixcontent" class="mixcontent">
                            <div class="col-md-3 mix cat1 no-padding">
                                <div class="single_mixi_portfolio">
                                    <img src="<?=$baseUrl?>webroot/img/pf1.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text"> 
                                            <a href=""><i class="lnr lnr-magnifier"></i></a>
                                            <a href=""><i class="lnr lnr-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mix cat2 no-padding">
                                <div class="single_mixi_portfolio">
                                    <img src="<?=$baseUrl?>webroot/img/pf2.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text"> 
                                            <a href=""><i class="lnr lnr-magnifier"></i></a>
                                            <a href=""><i class="lnr lnr-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mix cat1 cat4 no-padding">
                                <div class="single_mixi_portfolio">
                                    <img src="<?=$baseUrl?>webroot/img/pf3.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text"> 
                                            <a href=""><i class="lnr lnr-magnifier"></i></a>
                                            <a href=""><i class="lnr lnr-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mix cat3 cat4 no-padding">
                                <div class="single_mixi_portfolio">
                                    <img src="<?=$baseUrl?>webroot/img/pf4.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text"> 
                                            <a href=""><i class="lnr lnr-magnifier"></i></a>
                                            <a href=""><i class="lnr lnr-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mix cat4 no-padding">
                                <div class="single_mixi_portfolio">
                                    <img src="<?=$baseUrl?>webroot/img/pf5.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text"> 
                                            <a href=""><i class="lnr lnr-magnifier"></i></a>
                                            <a href=""><i class="lnr lnr-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mix cat1 cat2 no-padding">
                                <div class="single_mixi_portfolio">
                                    <img src="<?=$baseUrl?>webroot/img/pf6.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text"> 
                                            <a href=""><i class="lnr lnr-magnifier"></i></a>
                                            <a href=""><i class="lnr lnr-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mix cat1 cat2 no-padding">
                                <div class="single_mixi_portfolio">
                                    <img src="<?=$baseUrl?>webroot/img/pf7.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text"> 
                                            <a href=""><i class="lnr lnr-magnifier"></i></a>
                                            <a href=""><i class="lnr lnr-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mix cat1 cat2 no-padding">
                                <div class="single_mixi_portfolio">
                                    <img src="<?=$baseUrl?>webroot/img/pf7.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text"> 
                                            <a href=""><i class="lnr lnr-magnifier"></i></a>
                                            <a href=""><i class="lnr lnr-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="gap"></div>
                        </div>
                    </div>                     
                </div>
            </div>
        </section> <!-- End of portfolio two Section -->        




        <section id="counter" class="counter">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_counter sections text-center">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_right">
                                            <i class="lnr lnr-users"></i>
                                            <h2 class="statistic-counter">3,800</h2>
                                            <p>Satisfied Clients</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_right">
                                            <i class="fa fa-line-chart"></i>
                                            <h2 class="statistic-counter">4510</h2>
                                            <p>Projects Completed</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_right">
                                            <i class="lnr lnr-heart"></i>
                                            <h2 class="statistic-counter">2,800</h2>
                                            <p>Positive Feedbacks</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_right">
                                            <i class="lnr lnr-gift"></i>
                                            <h2 class="statistic-counter">5,500</h2>
                                            <p>Freebies Released</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Contact -->
        <?= $this->element('contact') ?>

        <footer id="footer" class="footer">
            <div class="container">
                <div class="main_footer">
                    <div class="row">

                        <div class="col-sm-6 col-xs-12">
                            <div class="copyright_text">
                                <p class=" wow fadeInRight" data-wow-duration="1s">Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">Bootstrap Themes</a>2016. All Rights Reserved</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="footer_socail">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-rss"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-dribbble"></i></a>
                                <a href=""><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <?= $this->Html->script(['vendor/jquery-1.11.2.min.js', 'vendor/bootstrap.min.js', 'jquery.easypiechart.min.js', 'jquery.mixitup.min.js', 'jquery.easing.1.3.js', 'plugins.js', 'main.js'])?>
        <!-- <script src="assets/js/vendor/jquery-1.11.2.min.js"></script> -->
        <!-- <script src="assets/js/vendor/bootstrap.min.js"></script> -->

        <!-- <script src="assets/js/jquery.easypiechart.min.js"></script> -->
        <!-- <script src="assets/js/jquery.mixitup.min.js"></script> -->
        <!-- <script src="assets/js/jquery.easing.1.3.js"></script> -->

        <!-- <script src="assets/js/plugins.js"></script> -->
        <!-- <script src="assets/js/main.js"></script> -->

    </body>
</html>
