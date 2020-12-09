<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 25/09/2015
 * Time: 12:41
 */

 require ("includes/loggedin.php");
 require_once("includes/header1.php");?>



    <div id="main">

        <!-- Start Slider Wrapping -->
        <div id="sliderwrap">

            <!-- Start Slider -->
            <div id="slider" class="nivoSlider">
                <img src="images/slider-banners/slider01.jpg" id="img"/>
                <div id="left_holder"><img onClick="slide(-1)" class ="left" src="images/slider-banners/left.png"/></div>
                <div id="right_holder"><img onClick="slide(1)" class ="right" src="images/slider-banners/right.png" /></div>
            </div>
            <!-- End Slider -->
            <!-- Start Slider HTML Captions -->
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div>
            <!-- End Slider HTML Captions -->

        </div>
        <!-- End Slider Wrapping -->
        <!-- Start H1 Title -->
        <div class="titles">

            <h1>Welcome to 2016 national Associate Of Nigerian Student Election.</h1>

            <span></span>

        </div>
        <!-- End H1 Title -->
        <!-- Start Main Body Wrap -->


        <div id="main-wrap">

            <!-- Start Featured Boxes -->
            <div class="boxes-third boxes-first">

                <div class="boxes-padding">

                    <div class="bti">
                        <div class="featured-images"><img src="images/home.jpeg" width="72" height="53" alt="Responsive"></div>
                        <div class="featured-titles"><a href="election_portal.php" class="featured-titles">E-election</a></div>
                    </div>
                    <div class="featured-text">Welcome to e-election for 2016 national association of nigerian student online election</div>


                </div>

                <span class="box-arrow"></span>

            </div>

            <div class="boxes-third">

                <div class="boxes-padding">

                    <div class="bti">
                        <div class="featured-images"><img src="images/about_us.jpg" width="66" height="53" alt="Responsive"></div>
                        <div class="featured-titles"><a href="about_us.php" class="featured-titles">procedure</a></div>
                    </div>
                    <div class="featured-text">election procedure for all participate, candidate as well as akakakakakaka voters</div>

                </div>

                <span class="box-arrow"></span>

            </div>

            <div class="boxes-third boxes-last">

                <div class="boxes-padding">

                    <div class="bti">
                        <div class="featured-images"><img src="images/contact_us.jpg" width="54" height="53" alt="Responsive"></div>
                        <div class="featured-titles"><a href="contact_us.php" class="featured-titles">schools</a></div>
                    </div>
                    <div class="featured-text">list of accredited universities, collage of education, polytechnic as well as other tertiary institution </div>

                </div>

                <span class="box-arrow"></span>

            </div>
            <!-- End Featured Boxes -->

            <!-- Start Latest Project titles -->
            <div class="boxes-full">

                <div class="boxes-padding fullpadding"><h1>our latest features</h1></div>

                <span class="box-arrow"></span>

            </div>
            <!-- End Latest Project titles -->

            <!-- Start Latest 3 Projects -->
            <div class="boxes-third boxes-first">

                <div class="latestthree">

                    <div class="title">
                        participant
                        <span class="titlearrow"></span>
                    </div>
                    <div class="latestthreeimage"><a href="verification.php" rel="prettyPhoto" title="Lorem ipsum dolor sit amet"><img src="images/latest-projects/project1.jpg" alt="Lorem ipsum dolor sit amet" width="305" height="132" border="0"/></a></div>
                    <a href="verification.php">participant</a>
                    <div class="text">
                        To participate on upcomming election pls click <a href="verification.php">here</a>
                        <span class="textarrow"></span>
                    </div>

                </div>

            </div>

            <div class="boxes-third">

                <div class="latestthree">

                    <div class="title">
                        Result
                        <span class="titlearrow"></span>
                    </div>
                    <div class="latestthreeimage"><a href="result.php" rel="prettyPhoto" title="Lorem ipsum dolor sit amet"><img src="images/latest-projects/project2.jpg" alt="Lorem ipsum dolor sit amet" width="305" height="132" border="0"/></a></div>
                    <a href="result.php">result</a>
                    <div class="text">
                        check result of 2016 national association of nigerian student election
                        <span class="textarrow"></span>
                    </div>

                </div>

            </div>

            <div class="boxes-third boxes-last">

                <div class="latestthree">

                    <div class="title">
                        About Us
                        <span class="titlearrow"></span>
                    </div>
                    <div class="latestthreeimage"><a href="about_us.php" rel="prettyPhoto" title="Lorem ipsum dolor sit amet"><img src="images/latest-projects/project3.jpg" alt="Lorem ipsum dolor sit amet" width="305" height="132" border="0"/></a></div>
                    <a href="about_us.php">About Us</a>
                    <div class="text">
                        e-election is an online application where different student.............
                        <span class="textarrow"></span>
                    </div>

                </div>

            </div>
            <!-- End Latest 3 Projects -->

        </div>
        <!-- End Main Body Wrap -->

    </div>
<?php require_once("includes/footer.php");?>