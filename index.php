<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Crowdlinks</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--        <link rel="icon" type="image/png" href="images/fav.png" sizes="32x32">-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <!--------------fonts-------->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="css/font-style.css" rel="stylesheet" type="text/css">
        <!--------------style-------->
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <!--------------mobile responsive style------------->
        <link rel="stylesheet" type="text/css" href="css/mobile-responsive.css">
        <!-------------carousel slider-------->
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <!-------------------popup fancy-box---------------------->
        <link rel='stylesheet prefetch' href='css/peqjvl.css'>
        <!-------------------banner amimation---------------------->
        <link href="css/animations.css" rel="stylesheet" type="text/css"/>
        <!--------------------header smaller------------->
        <script src="js/classie.js"></script>
        <script>
            function init() {
                window.addEventListener('scroll', function (e) {
                    var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                            shrinkOn = 50,
                            header = document.querySelector("header");
                    if (distanceY > shrinkOn) {
                        classie.add(header, "smaller");
                    } else {
                        if (classie.has(header, "smaller")) {
                            classie.remove(header, "smaller");
                        }
                    }
                });
            }
            window.onload = init();
        </script>   
    </head>
    <body>
        <!----------------header-------------------->
        <?php include ('header.php'); ?>
        <!----------------end header---------------->
        <!----------------main---------------->
        <main>
            <section class="index-banner">
                <div class="main-banner">
                    <img src="images/slide5.png" class="img-responsive slide5 fadeInLeft">
                    <img src="images/slide1.png" class="img-responsive slide1 fadeInRight">
                    <img src="images/slide2.png" class="img-responsive slide2 fadeInRight">
                    <img src="images/slide3.png" class="img-responsive slide3 fadeDistortion">
                    <img src="images/slide4.png" class="img-responsive slide4 fadeInUp">
                    <div id="typer"></div>    
                    <a href="#latest-wrk" class="scroll">view work</a>
                </div>
            </section>
            <!-------who we are----------->
            <section>
                <div class="container">
                    <div class="index-about">
                        <div class="row">
                            <div class="col-md-4">
                                <h2>Who We Are</h2>
                                <img src="images/wh-r.png" class="img-responsive" data-aos="zoom-in-right">
                            </div>
                            <div class="col-md-8">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only </p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
                                <a href="about-us.php" class="more">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-------service----------->
            <section class="service">
                <div class="container">
                    <div class="row">
                        <h2>What we can do for you</h2>
                    </div>
                    <div class="row">
                        <div class="wt-we-can-do">
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padd">
                                <a href="services.php">
                                    <div class="service-list brd-btm btm">
                                        <div data-aos="zoom-in-right">
                                            <span class="icon-computer-graphic"></span>
                                            <h4>WEB DESIGN</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padd">
                                <a href="services.php">
                                    <div class="service-list brd-btm brd-lft btm">
                                        <div data-aos="zoom-in">
                                            <span class="icon-web-design"></span>
                                            <h4>Web Development</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padd">
                                <a href="services.php">
                                    <div class="service-list brd-btm brd-lft btm">
                                        <div data-aos="zoom-in-left">
                                            <span class="icon-layers"></span>
                                            <h4>Branding</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padd">
                                <a href="services.php">
                                    <div class="service-list btm">
                                        <div data-aos="zoom-in-right">
                                            <span class="icon-app-development"></span>
                                            <h4>App Development</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padd">
                                <a href="services.php">
                                    <div class="service-list brd-lft btm">
                                        <div data-aos="zoom-in">
                                            <span class="icon-software"></span>
                                            <h4>Billing Software</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padd">
                                <a href="services.php">
                                    <div class="service-list brd-lft btm">
                                        <div data-aos="zoom-in-left">
                                            <span class="icon-visual-design"></span>
                                            <h4>Visual Ad</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <a href="services.php">view all services</a>
                    </div>
                </div>
            </section>
            <!-------latest work----------->            
            <section class="latest-wrk" id="latest-wrk">
                <div class="container">
                    <div class="row">
                        <h2>Latest Work</h2>
                    </div>
                    <div class="row">
                        <div class="latest-wrk-lst">
                            <div class="col-md-7 col-sm-7 col-xs-12" id="thumb">
                                <a href="portfolio.php">
                                    <div class="lst-wrk">
                                        <img src="images/lst-wrk2.jpg" class="img-responsive">
                                        <div class="lst-wrk-ovrly">
                                            <div class="lst-wrk-dtls">
                                                <h4>Crowdlinks Media</h4>
                                                <label>visual Ad</label>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="portfolio.php">
                                    <div class="lst-wrk last-lst-wrk">
                                        <img src="images/lst-wrk3.jpg" class="img-responsive">
                                        <div class="lst-wrk-ovrly">
                                            <div class="lst-wrk-dtls">
                                                <h4>Crowdlinks Media</h4>
                                                <label>visual Ad</label>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <a href="portfolio.php">
                                    <div class="lst-wrk">
                                        <img src="images/lst-wrk1-Branding.jpg" class="img-responsive">
                                        <div class="lst-wrk-ovrly">
                                            <div class="lst-wrk-dtls">
                                                <h4>Crowdlinks Media</h4>
                                                <label>visual Ad</label>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="portfolio.php">
                                    <div class="lst-wrk">
                                        <img src="images/lst-wrk1.jpg" class="img-responsive">
                                        <div class="lst-wrk-ovrly">
                                            <div class="lst-wrk-dtls">
                                                <h4>Crowdlinks Media</h4>
                                                <label>visual Ad</label>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="work-list">
                                    <div class="col-md-7 no-padd">
                                        <p>We’ve Completed More Than </p>
                                        <span>100</span>
                                        <p>projects for our amazing clients,</p>
                                    </div>
                                    <div class="col-md-5 no-padd">
                                        <a href="portfolio.php" class="more">view all work</a>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <!-------client say----------->  
            <section class="wt-people-say">
                <div class="container">
                    <div class="row">
                        <h2>What People Say</h2>
                    </div>
                    <div class="row">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="people">
                                    <div class="people-say">
                                        <span class="icon-right-quotation-mark"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text</p>
                                    </div>
                                    <div class="people-dtls">
                                        <img src="images/people-say.png" class="img-responsive">
                                        <h4>Gilson Tomy</h4>
                                        <label>Businessman</label>
                                    </div>
                                </div>
                            </div>                            
                            <div class="item">
                                <div class="people">
                                    <div class="people-say">
                                        <span class="icon-right-quotation-mark"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text</p>
                                    </div>
                                    <div class="people-dtls">
                                        <img src="images/people-say.png" class="img-responsive">
                                        <h4>Gilson Tomy</h4>
                                        <label>Businessman</label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="people">
                                    <div class="people-say">
                                        <span class="icon-right-quotation-mark"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text</p>
                                    </div>
                                    <div class="people-dtls">
                                        <img src="images/people-say.png" class="img-responsive">
                                        <h4>Gilson Tomy</h4>
                                        <label>Businessman</label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="people">
                                    <div class="people-say">
                                        <span class="icon-right-quotation-mark"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text</p>
                                    </div>
                                    <div class="people-dtls">
                                        <img src="images/people-say.png" class="img-responsive">
                                        <h4>Gilson Tomy</h4>
                                        <label>Businessman</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-------client logo----------->  
            <section class="client-logo">
                <div class="container">
                    <div class="row">
                        <h2>Our clients</h2>
                    </div>
                    <div class="row">
                        <div class="owl-carousel">
                            <div class="item">
                                <img src="images/client-logo/client-logo1.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo2.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo3.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo4.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo5.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo6.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo7.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo8.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo9.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo10.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo11.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo12.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo13.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo14.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo15.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo16.png" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="images/client-logo/client-logo17.png" class="img-responsive">
                            </div>                            
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!----------------end main-------------------->
        <!----------------footer-------------------->
        <?php include ('footer.php'); ?>
        <!---------------end-footer-------------------->
        <script>
            $('.client-logo .owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    481: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    768: {
                        items: 4
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        </script>        
        <script>
            $('.wt-people-say .owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        </script>
        <!---------smooth scroll-------->
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <script src="js/SmoothScroll.min.js"></script>
        <!----------animation--------->
        <link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
        <link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
        <script src='js/aos.js'></script>
        <script src="js/aosindex.js"></script>

        <!-- typer js--><!-- For banner text -->
        <script src='js/jquery.typer.js'></script>
        <script>
            var win = $(window),
                    foo = $('#typer');
            foo.typer(['Need website,we are here to help you ?', 'Need website,we are here to help you ?', 'Need website,we are here to help you ?']);
// unneeded...
            win.resize(function () {
                var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));
                foo.css({
                    fontSize: fontSize * .8 + 'px'
                });
            }).resize();
        </script>
        <!---------fancy- box--------->
        <script src='js/peqjvl.js'></script>
        <!---------bootstrap--------->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>  
    </body>
</html>
