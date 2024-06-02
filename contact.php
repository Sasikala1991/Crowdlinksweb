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
        <!----------------end header---------------->
        <!----------------main---------------->
        <main>
            <section class="inner-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inner-banner-img">
                                <img src="images/contact-banner.png" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inner-banner-caption">
                                <div id="typer"></div>                                
                                <p>Lorem Ipsum is simply dumman unook. It has survived not only </p>
                            </div>
                        </div>                        
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="contact">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="contact-info">
                                    <h3>Location</h3>
                                    <address>
                                        <span>Crowdlinks</span><br>
                                        4/58-2 Malamel House, Edappally P.O<br>
                                        Marottichodu Jn. Kochi -682025.
                                    </address>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="contact-info pull-right">
                                    <h3>Contact info</h3>
                                    <p><span class="icon-phone-receiver"></span>+91 7558885283, +91 9946702904</p>
                                    <p><span class="icon-mail-black-envelope-symbol"></span>info@crowdlinks.in</p>
                                    <p><span class="icon-grid-world"></span>www.crowdlinks.in</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <div class="contact-info contact-form">
                                    <h3>Enquiry</h3>
                                    <form class="form-horizontal">
                                        <div class="col-md-4">
                                            <div class="form-group">                                            
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">                                            
                                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">                                            
                                                <input type="text" name="place" id="place" class="form-control" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">  
                                                <textarea rows="4" class="form-control" placeholder="Services Looking For?"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-3"> 
                                            <div class="form-group">                                            
                                                <input name="submit" type="submit" id="submit" class="enqry-btn" value="Send">     
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.1087456311416!2d76.29636551479425!3d10.007875592845794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d0d94c8b7c9%3A0x27efba594b5a3fb7!2sCrowdlinks!5e0!3m2!1sen!2sin!4v1529643568466" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>
        </main>
        <!----------------end main-------------------->
        <!----------------footer-------------------->
        <?php include ('footer.php'); ?>
        <!---------------end-footer-------------------->
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
