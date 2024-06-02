<header>
    <div class="container">
        <div class="row">
            <div class="header">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.php"><img class="logo" src="images/logo.png"></a></h1>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav class="cl-effect-13" id="cl-effect-13">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">HOME</a></li>
                                <li><a href="about-us.php">ABOUT US</a></li>
                                <li><a href="services.php">SERVICES</a></li>
                                <li><a href="portfolio.php">PORTFOLIO</a></li>
                                <li><a href="contact.php">CONTACT US</a></li>
                            </ul>
                        </nav>
                    </div>                
                </nav>
            </div>
        </div>
    </div>
</header>


<script type="text/javascript">
    $(document).ready(function () {
        var str = location.href.toLowerCase();
        $(".navbar-nav li a").each(function () {
            if (str.indexOf(this.href.toLowerCase()) > -1) {
                $("li.active").removeClass("active");
                $(this).parent().addClass("active");
            }
        });
        $("li.active").parents().each(function () {
            if ($(this).is("li")) {
                $(this).addClass("active");
            }
        });
    });
</script>