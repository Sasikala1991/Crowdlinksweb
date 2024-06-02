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
            <section>
                <div class="container">
                    <div class="row">
                        <div class="portfolio  main-pos" id="port">
                            <ul class="simplefilter">
                                <li class="active" data-filter="all">All</li>
                                <li data-filter="1">web design</li>
                                <li data-filter="2">Logo Design</li>
                                <li data-filter="2">Logo Design</li>
                            </ul>                            
                            <div class="filtr-container">
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Peppermoon.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>PepperMoon</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design1.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Verve</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Rajagiri Viswajyothi College.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Rajagiri Viswajyothi College</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design2.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Eminents Casa</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Pittappillil Infrastructure Pvt.Ltd.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Pittappillil Infrastructure Pvt.Ltd</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Rajdhani Palace.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Rajdhani Palace</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design3.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>B&L Equipments </h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design4.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Zell Life Sciences</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/ski-college.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Ski College</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design5.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Dial Kerala</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design6.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Future Employment</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Surya Holidays.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Surya Holidays</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design7.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Connect Kerala</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Vijayachits.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Vijayachits</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Noell Celling Fan.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Noell Celling Fan</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design8.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Pioneer Marketing</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design9.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Blue Ocean</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Mother Birds.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Mother Birds</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Marthoma College.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Marthoma College</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Mangala Gardens.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Mangala Gardens</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Kerala Cultural Association Redditch.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Kerala Cultural Association Redditch</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Formost.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Formost</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Flyon Academy.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Flyon Academy</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Exeter Malayalee Association.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Exeter Malayalee Association</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Eduzan Educational Consultants.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Eduzan Educational Consultants</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/DATATEC.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>DATATEC</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design10.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Orchid Buildmart</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design11.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>PepperMoon</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design12.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Bas Global</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Connecting Kerala Travel.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Connecting Kerala Travel</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Comfy Wedding Store.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Comfy Wedding Store</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/college of engineering & management punnapra.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>College of Engineering & Management Punnapra</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/backwater-Kayaers.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Backwater Kayaers</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/B&-LEquipments.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>B&L Equipments</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/aim_college.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Aim College</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="1" data-sort="website">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/ABHILASH FURNITURE WEb.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>ABHILASH FURNITURE WEB</h3>
                                                    <h4>Website</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design13.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Ann Treat House</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design14.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Alamkrtha Boutique</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design15.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>BIFZ</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design16.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Amis</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design17.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                   <h3>Meenu Media Group</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design18.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Orbit Pharma</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design19.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>VK Interiors</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design20.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Backwater Kayakers</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design21.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Mangala Gardens</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="filtr-item" data-category="2" data-sort="Logo">
                                    <a href="">
                                        <figure class="port-gird">
                                            <img src="images/portfolio/Logo Design22.jpg" class="img-responsive" alt=" " />
                                            <figcaption>
                                                <div class="caption-overlay">
                                                    <h3>Aiswarya</h3>
                                                    <h4>Logo Design</h4>
                                                    <a href="portfolio-details.php" class="vw-mr">view more</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                
                                <div class="clearfix"> </div>
                            </div>
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
