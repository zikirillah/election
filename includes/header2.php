<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 20/10/2015
 * Time: 07:55
 */

 ?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>e election</title>
    <meta name="description" content="e-election" />
    <meta name="keywords" content="e-election" />
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

                    <li><a href="admin_home.php" title="Impulse Home">Home | Admin</a></li>

                    <li>
                        <a href="admin_register.php" title="register new admin"> Register Admin</a>
                    </li>




                    <li><a href="#" title="profile">Account</a>
                        <ul class="dropdown">
                            <li><a href="#"><?php if(isset($username)){echo $username;} ?></a></li>
                            <li><a href="logout.php">logout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        </ul>

                    </li>






                    <!--<li><a href="e_lectures.php" title="Access Lectures">E-Lectures</a></li>-->

                    <li><a href="admin_logout.php" title="logout">logout</a></li>




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
            <a href="#" title="Response">e-election</a>
        </div>
        <!-- End Logo area -->

    </div>
    <!-- End Social & Logo area -->

</div>

<!--<div id="adminNav">
<?//include "siderbar.php"?>
        <ul>

    <a href="admin_register.php"><li>Admin</li></a><br><br>
    <a href="admin_addCandidate.php"><li>Add candidate</li></a><br><br>
    <a href="admin_view.php"><li>view candidate</li></a><br><br><br><br><br>
    <a href="admin_logout.php"><li>logout</li></a>
</ul>
</div>-->

</body>
