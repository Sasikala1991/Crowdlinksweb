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
        <!--------------tab------------->
        <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css">
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
            <section class="services">
                <div class="container">
                    <div class="row">
                        <h2>Our Services</h2>
                    </div>
                    <div class="row">
                        <div id="verticalTab">
                            <ul class="resp-tabs-list">
                                <li>WEB DESIGN</li>
                                <li>E-Commerce Website</li>
                                <li>SEO & SMO</li>
                                <li>LOGO DESIGNING</li>
                                <li>BRANDING</li>
                                <li>CORPERATE IDENTITY MOVIE</li>
                                <li>BROCHURE & FLYER DESIGNS</li>
                                <li>ONLINE PROMOTIONS</li>
                                <li>DOMAIN REGISTRATION</li>
                                <li>PROVIDED SERVER SPACE</li>
                            </ul>
                            <div class="resp-tabs-container">
                                <div>
                                    <img src="images/website.png" class="img-responsive">
                                    <p>Having an identity in web space is critical for any kind of business. We are witnessing extra ordinary rise in internet usage in the country in past one and half years. People make use of internet to search anything and everything. Undoubtedly it is an era of internet. So if you do not possess online identity it means you have already missed half of your business. Advance in technology made web designing highly affordable. Crowdlinks are happy to take you to the world of online business with interesting variety of web site options for our clients. </p>
                                    <p><b>Static or Dynamic Website</b></p>
                                    <p>Crowdlinks Media offers gripping dynamic website designs to our clients. We know how important is user interface is for a website and thus we design our websites with easy navigations. All our designs are specially made for targeted audience.  We understand each customer has different needs and they seek unique solution, hence we design and develop fresh and original web sites. Our websites are highly user centric, visually attractive, having thoughtful functionality, design consistency and cross platform compatibility. All our websites are responsive. </p>
                                    <p><b>CMS Websites</b></p>
                                    <p>At Crowdlinks, we first gauge your requirements, and then provide crisp designs. We always make sure we are maintaining a user friendly approach on client side. We work on all the latest CMS platforms like WordPress, Joomla and Drupal. Both our design and development teams go hand in hand to keep pace with the latest in technologies.</p>
                                </div>
                                <div>
                                    <img src="images/website.png" class="img-responsive">
                                    <p>The online retail market is booming and we are in an era where almost every business seeks a promising space online. Setting up an E-commerce portal ensures your business have got global reach. Now is the best time to start selling your products online. We help set-up your online responsive e-commerce website, right from design and development to payment method integration.</p>
                                </div>
                                <div>
                                    <img src="images/website.png" class="img-responsive">
                                    <p>It is easy to set up a website. But to rank your website on top of search results requires great efforts and in depth knowledge of Google’s latest algorithms. This is an area where Crowdlinks excel at.  Our SEO specific strategies with the use strong keywords are highly effective. It is our endeavor to improve the volume and quality of traffic to your web site from various search engines.</p>
                                    <p>Social media is another powerful tool to promote your business.  Now days it is must to link websites with social media platforms. Advts on social media is also highly effective. These platforms now days plays crucial role in generating customer traffic to your website. Even if you do not possess a website we can help you with greater number of enquires through social media platforms. Our customised services will help you get ahead of your competitors by drawing the attention of customers as well as crawlers and spiders</p>
                                </div>
                                <div>
                                    <img src="images/website.png" class="img-responsive">
                                    <p>A good logo is enough to speak for the firm. We believe a logo is a statement of what business you are dealing with. Hence at Crowdlinks Media we create unique, meaningful and innovative logos having an indelible impression on your target customers. In short we are giving shape to your imagination. We know a logo is the representation of your brand and our objective is to provide you with the best suited logo design that will uniquely identifies you all over the world. We also make sure logos designed are Trade Mark compliance.</p>
                                </div>
                                <div>
                                    <img src="images/website.png" class="img-responsive">
                                    <p>Products that standout only survives. At Crowdlinks Media we are extremely happy to help you in developing unique brands for your business. Each and every one of us has unique flairs to exhibit, just like this your brand also needs to set a distinctive tone among the targeted audience through brand identity. All you need to do is share your brand vision with us. We keep that vision in focus and make sure your brand carries peculiar characteristics. Branding is all about blending different brand elements together. We have a creative team, specialized to blend together different brand elements like company’s name, logo, color palette, letterhead, stationary material, social media presence, etc. to build a corporate identity.</p>
                                </div>
                                <div>
                                    <img src="images/website.png" class="img-responsive">
                                    <p>How useful is to have a corporate video narrating your brand identity and success stories over the years. At Crowdlinks we understand how important it is and we help your brand narrate its own story. We make sure all milestones and reputations your business has achieved highlighted in the video. In short it will be a proud moment for you to display your brand story in an all important business meet or any other kind of meetings or get together. We have setup a special team for creating classy brand identity movies. Don’t hesitate pick the phone and tells us your story we are ready to come up with an interesting script.</p>
                                </div>
                                <div>
                                    <img src="images/website.png" class="img-responsive">
                                    <p>Brochures do have a strong impact on customers. A professional and creative brochure is enough to represent your business to targeted audience. It can be a leaflet, pamphlet or flyer used to represent information regarding a service or product. Now days it is widely used for promotional purpose as well. We at Crowdlinks create attractive and informative E-brochures and printed brochures to help you increasing business. We create Corporate Brochure, Product Catalogs and Promotional/Sales Brochures.</p>
                                </div>
                                <div>
                                    <img src="images/website.png" class="img-responsive">
                                    <p>As we said earlier it is an era of internet. You cannot stick to traditional media only. You have to dive into the world of digital promotions to establish your brands online presence. No matter whether you are start up or a company with strong foot in the market our online promotional strategies only help you to grab the attention of customers in the cyber space. We use all available resources and to increase your business conversion rate. Apart from SEO, Social Media Marketing plays a pivotal role here, we make active use of Facebook, Pinterest, Instagram, Twitter, YouTube and LinkedIn. However, our vision for you is not just confined to a mere Facebook post or a Pay-Per-Click campaign. We offer an array of internet marketing services like E-mail marketing, Online PR and Affiliate marketing to help you stay ahead of your competitors.</p>
                                </div>
                                <div>
                                    <img src="images/website.png" class="img-responsive">
                                    <p>First step to setup a website is to grab a domain name. The domain name is your identity on the Cyber space. Crowdlinks Media will help you in purchasing domain of your choice. We register the domain name in your name and take care of the technical details as the administrator of the domain. We ensure there is no mistake and the information provided is kept confidential. For any information regarding domain name and its registration feel free to call us. (Domain name registration is however subject to availability)</p>
                                </div>
                                <div>
                                    <img src="images/website.png" class="img-responsive">
                                    <p>Crowdlinks provides server storage space service as well. We provide full email and website hosting. We offer a shared (but secure) hosting server, dedicated servers and servers with integrated Secure Socket Layers (SSL). Within our hosting packages, your emails can be fully hosted by us. We will provide you with all the settings and configurations required for Pop 3 accounts, imap and mobile phone setup. To Know more about our hosting packages give a ring to out phone number.</p>
                                </div>
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
        <script>
            $(document).ready(function () {
                $('#verticalTab').easyResponsiveTabs({
                    type: 'vertical',
                    width: 'auto',
                    fit: true
                });
            });
        </script>
        <script src="js/easy-responsive-tabs.js"></script>
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
