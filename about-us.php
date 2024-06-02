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
            <section class="inner-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inner-banner-caption">
                                <div id="typer"></div>                                
                                <p>Lorem Ipsum is simply dumman unook. It has survived not only </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inner-banner-img">
                                <img src="images/contact-banner.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about">
                <div class="container">
                    <div class="row">
                        <h2>About Us</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, t has survived not only five centuries, but also the leap unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, t has survived not only five centuries, but also the leap </p>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="about-us">
                        <h2>Our Vision</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                    </div>
                </div>
            </section>
            <section class="who-we-r">
                <div class="container">
                    <div class="row">
                        <h2>Who We Are</h2>
                        <p>We are a team of different artistic and skilled film producers who have the same aim of producing the best films to the beloved audience.</p>
                    </div>
                </div>
                <div class="owl-carousel">
                    <div class="item">
                        <div class="members">
                            <img src="images/team-member.jpg" class="img-responsive">
                            <div class="members-ovrly">
                                <div class="members-dtls">
                                    <label>UI | UX Designer</label>
                                    <h4>Shyam Suhas</h4>                                    
                                    <ul>
                                        <li><a href="" class="icon-facebook-letter-logo"></a></li>
                                        <li><a href="" class="icon-instagram"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-------Work Process---------->
            <section class="work-process">
                <div class="container">
                    <div class="row">
                        <h2>Work Process</h2>
                    </div>
                    <div class="row">
                        <ul class="process-wrapp">
                            <li>
                                <span class="pro-step">01</span>
                                <p>Concept</p>
                            </li>
                            <li>   
                                <span class="pro-step">02</span>
                                <p>Plan</p>
                            </li>
                            <li>      
                                <span class="pro-step">03</span>
                                <p>Design</p>
                            </li>
                            <li>     
                                <span class="pro-step">04</span>
                                <p>Development</p>
                            </li>
                            <li>      
                                <span class="pro-step">05</span>
                                <p>Quality Check</p>
                            </li>
                        </ul>
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
        </main>
        <!----------------end main-------------------->
        <!----------------footer-------------------->
        <?php include ('footer.php'); ?>
        <!---------------end-footer-------------------->
        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
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
                    768: {
                        items: 5
                    }
                }
            })
        </script>
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
