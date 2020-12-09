<script src="includes/functions.js"></script>
<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 11/11/2015
 * Time: 10:30
 */

require ("includes/loggedin.php");
require_once("includes/header1.php");
//get value entered
if(isset($_POST['comment'])&&isset($_POST['password'])){
   //assign the value to a variable
    $pssword = $_POST["password"];
    $comment = $_POST['comment'];

    if(!empty($pssword)&& !empty($comment)){
        if($password == $pssword){

            //insert data into database
            $query = "INSERT INTO `comments` VALUES ('','". $_SESSION['user_id'] ."', '".$comment."', '1' )";

            if($query_run=(mysql_query($query))){
                echo '<script type="text/javascript">complete();</script>';
                $comment='';
            }
        }else{
            echo '<script type="text/javascript">invalid_password();</script>';

        }

    }
}
?>
    <div id="main">
        <!-- Start H1 Title -->
        <div class="titlesnormal">

            <h1>contact developer </h1>

            <span></span>

        </div>
        <!-- End H1 Title -->
        <!-- Start Main Body Wrap -->
        <div id="main-wrap">

            <!-- Start Left Section -->
            <div class="leftsection">

                <!-- Start Google Maps -->
                <div class="blogwrapstart">

                    <div id="map_canvas"></div>
                    <span class="box-arrow"></span>

                </div>
                <!-- End Google Maps -->

            </div>
            <!-- End Left Section -->

            <!-- Start Right Section -->
            <div class="rightsection">

                <!-- Start Blog Widget -->
                <div class="blogwidgetstart">
                    <!-- Start Categories Widget -->
                    <div class="widgettitle"><h4>Contact Details</h4></div>

                    <div class="widgetbody">

                        <div class="blogcategories">

                            <div class="contactdetails">


                                <p>website : www.kust.edu.ng</p>
                                <p>email : e_election@kust.com</p>
                                <p>+234 706 080 5944</p>
                                <p>Kano University of Science and Technology<br />PMB : 3244<br />Wudil Local govt<br />Kano State</p>

                            </div>

                        </div>

                    </div>
                    <!-- End Categories Widget -->
                    <span class="box-arrow"></span>

                </div>
                <!-- End Blog Widget -->

            </div>
            <!-- End Right Section -->

            <!-- Start Full Width -->
            <div class="boxes-full">

                <div class="contacttitle">

                    <h2>Contact Responsive</h2>

                </div>

                <div class="boxes-padding fullpadding">

                    <div id="contactwarning"></div>
                    <div id="contactajax"></div>

                    <form action="<?php echo $current_file;?>" method="post" name="contact_us">

                        <div class="contacttextarea">
                            <input name="contactformid" id="contactformid" type="hidden" value="1" />

                            <fieldset>
                                <textarea name="comment" id="comment" cols="5" rows="5" class="contacttextarea" maxlength="2000" onfocus="if (this.value == 'Please Leave A Message') {this.value = '';}"><?php if(isset($comment)){echo $comment;}else{echo 'Please Leave A Message';} ?></textarea>
                            </fieldset>

                        </div>



                        <div class="contacttextboxes">

                            <fieldset>
                                <font color="#17173a" size="3em">You logged in as <?php echo $firstname." ".$middlename;?>
                            </fieldset>

                            <fieldset>
                                <a href="logout.php">log out</a> And log in as different User
                            </fieldset>

                            <fieldset>
                               password: <input id="password" name="password" type="password" class="contacttextform" onfocus="if (this.value == 'Please Insert Your password') {this.value = '';}"value="Please Insert Your password">
                            </fieldset>

                            <fieldset>
                                <input name="send" type="submit" class="contactformbutton" value="Send">
                            </fieldset>

                        </div>

                    </form>

                </div>

                <span class="box-arrow"></span>

            </div>
            <!-- End Full Width -->

        </div>
        <!-- End Main Body Wrap -->

    </div>
<?php require_once("includes/footer.php");?>