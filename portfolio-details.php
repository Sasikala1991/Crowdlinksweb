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
        <?php include ('enquiry.php'); ?>
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

            <section class="portfolio-details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>WEBSITE</h2>
                        </div>
                        <div class="col-md-7">                            
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <a href="images/portfolio-detail-img.jpg"  data-fancybox="images">
                                        <img src="images/portfolio-detail-img-thumb.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="images/portfolio-detail-img.jpg"  data-fancybox="images">
                                        <img src="images/portfolio-detail-img-thumb.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="images/portfolio-detail-img.jpg"  data-fancybox="images">
                                        <img src="images/portfolio-detail-img-thumb.jpg" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="portfolio-info">
                                <table>
                                    <tr>
                                        <td width="25%">Client</td>
                                        <td>: TimeWarner</td>
                                    </tr>
                                    <tr>
                                        <td width="25%">Industry</td>
                                        <td>: Entertainment</td>
                                    </tr>
                                    <tr>
                                        <td width="25%">Location</td>
                                        <td>: New York, New York</td>
                                    </tr>
                                </table>
                                <a href="" class="more">Live Preview</a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-------contact enqury-------------->
            <section class="send-msg">
                <div class="container">
                    <div class="row">
                        <div class="say-hello">
                            <h2>want to say <span>hello</span> ?</h2>
                            <a href="javascript:;" data-fancybox data-animation-duration="700" data-src="#enquiry">send us a message</a>
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
            $('.portfolio-details .owl-carousel').owlCarousel({
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
                    481: {
                        items: 1
                    },
                    768: {
                        items: 1
                    }
                }
            })
        </script>
        <!-- fliter-JavaScript -->
        <script src="js/jquery.filterizr.js"></script>
        <script>
            $(function () {
                $('.filtr-container').filterizr();
            });
        </script>
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
