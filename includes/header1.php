<?php ?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>e election</title>
    <meta name="description" content="e election" />
    <meta name="keywords" content="e election" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">



    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="grid.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../css/navbar.css" rel="Stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">-->


    <!-- Custom styles for this template -->
    <!--<link href="css/navbar.css" rel="Stylesheet" type="text/css">
<link rel="shortcut icon" href="http://www.derby-web-design-agency.co.uk/themes/response/images/favicon.png" />
    <link rel="bookmark icon" href="http://www.derby-web-design-agency.co.uk/themes/response/images/favicon.png" />-->
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <!--<meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="grey" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
        <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
        <script src="js/twitter.js"></script>-->
        <script src="includes/functions.js"></script>
    <script type="text/javascript">
        var imagecount = 1;
        var total = 5;

        function slide(x){
            var Image = document.getElementById('img');
            imagecount = imagecount + x;
            if(imagecount > total){ imagecount = 1;}
            if(imagecount < 1){ imagecount = total;}
            Image.src = "images/slider-banners/slider0"+imagecount+".jpg";
        }
        window.setInterval(function slideA(){
            var Image = document.getElementById('img');
            imagecount = imagecount + 1;
            if(imagecount > total){ imagecount = 1;}
            if(imagecount < 1){ imagecount = total;}
            Image.src = "images/slider-banners/slider0"+imagecount+".jpg";
        },5000);



        // update election result
        function change() {
            function slide() {
                window.location = "<?php echo $current_file;?>";

            }

            window.setInterval(function slideA() {
                window.location = "<?php echo $current_file;?>";
            }, 3000);
        }

    </script>

</head>

<body>

<div id="header">
    <!-- Start navigation area -->
    <div id="navigation">

        <div id="navigation_wrap">

            <!-- Start contact info area -->
            <div id="conteactinfo"><strong>Email:</strong> e-election@kust.com  |  <strong>Phone:</strong> (+234) 70 60805944</div>
            <!-- End contact info area -->
            <!-- Start navigation -->
            <div id="navi">

                <ul>

                    <li><a href="home.php" title="Impulse Home">Home</a></li>

                    <li><a href="about_us.php" title="About Impulse">About Us</a></li>

                    <li><a href="create_profile.php" title="Create profile">Register</a></li>

                    <!--<li><a href="E-books.php" title="Get E-Materials">E-Materials</a></li>
                    <ul>
                     <li><a href="E-journals.php" title="Get E-Journals">E-Journals</a></li>
                     <li><a href="E-books.php" title="Get E-Books">E-Books</a></li>
                     <li><a href="E-articles.php" title="Get E-Articles">E-Articles</a></li>
                     </ul>-->



                    <li><a href="contact_us.php" title="Contact VirtualClass">Contact Us</a></li>
                    </li>




                    <li><a href="" title="profile">Account</a>
                        <ul class="dropdown">
                            <li><a href="#"><?php echo $firstname; ?></a></li>
                            <li><a href="#">Edit profile</a></li>
                            <li><a href="logout.php">logout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        </ul>

                    </li>






                    <!--<li><a href="e_lectures.php" title="Access Lectures">E-Lectures</a></li>-->

                    <li><a href="logout.php" title="Contact VirtualClass">logout</a></li>




                </ul>

            </div>
            <!-- End navigation -->

        </div>

    </div>
    <!-- End navigation area -->
    <div class="clear"></div>
    <!-- Start Social & Logo area -->
    <div id="header_small">
        <!-- Start Social area -->
        <div class="social">

            <ul>

                <li><a href="#" class="social-google" title="Find us on google"></a></li>
                <li><a href="http://facebook.com/zikirillahi" class="social-facebook" title="Find us on facebook"></a></li>
                <li><a href="https://twitter.com/zikirillahi" class="social-twitter" title="Follow us on twitter"></a></li>
                <li><a href="#" class="social-linkedin" title="Join us on linkedin"></a></li>
                <li><a href="#" class="social-forrst" title="Join us on forrst"></a></li>
                <li><a href="#" class="social-dribbble  title="Join us on dribble"></a></li>
            </ul>

        </div>
        <!-- End Socialarea -->

        <!-- Start Logo area -->
        <div id="logo">
            <a href="index.php" title="Response">e-election</a>
        </div>
        <!-- End Logo area -->

    </div>
    <!-- End Social & Logo area -->

</div>
<!--<div id="listinfo" >
    <ul>
        <a href="index.php" title="home page"> <li>Home</li></a><br>
        <a href="#" ><li> procedure</li></a><br>
        <a href="#" title="eligible"> <li>participant</li></a><br>
        <a href="#" title="result"> <li>result</li></a><br>
        <a href="#" title="about us"> <li>about us</li></a><br>
        <a href="#" title="contact us"><li>contact us</li></a>

    </ul>
</div> -->
