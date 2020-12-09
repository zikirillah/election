<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 14/11/2015
 * Time: 14:25
 */

require 'includes/connect.php';
require 'includes/admin_core.php';
require_once('includes/header2.php');


if(isset($_POST['username'])&&isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username)&& !empty($password)){
        $query = "SELECT `id` FROM `admin` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password)."'";
        if($query_run = mysql_query($query)) {
            $query_num_rows = mysql_num_rows($query_run);

            if($query_num_rows==0){

                echo '<script type="text/javascript">invalid();</script>';

            }else if($query_num_rows==1){
                $admin_id = mysql_result($query_run, 0,'id');
                $_SESSION['admin_id']=$admin_id;
                if(isset($_SERVER['HTTP_REFERER'])&& !empty($_SERVER['HTTP_REFERER'])) {
                   // header('location:' . $http_referer);
                    header('location:admin_home.php');

                }else{
                    header('location:admin_home.php');

                }


            }
        }


    }
}

?>

    <div id="main">
    <br/><br/><br/>
    <!-- Start H1 Title -->
        <!-- <div class="titlesnormal">

             <h1>Admin Login to your e-election account : Gain access to your account</h1>-->

        <span></span>

    </div>
    <!-- End H1 Title -->
    <!-- Start Main Body Wrap -->
    <div id="main-wrap">



    <!-- Start Full Width -->
    <div class="boxes-full">

        <div class="contacttitle">

            <h2 align="center">Admin Log in Details</h2>

        </div>


        <div class="boxes-padding fullpadding">

            <div id="contactwarning"></div>
            <div id="contactajax"></div>

            <form action="<?php echo $current_file; ?>" method="post" name="ajaxcontactform" >


                <input name="contactformid" id="contactformid" type="hidden" value="1" />






                <div class="splitnone">
                    <h3></h3>
                </div>


                <div class="splitnone">

                    <fieldset>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-2 form_text">Username/email :</div>
                        <div class="col-md-5">
                            <input name="username" type="text" class="contacttextform"placeholder="Please Insert Your Username or Email" required="" value="<?php if(isset($username)){echo $username; }?>">
                        </div>

                    </fieldset>



                </div>


                <div class="splitnone">


                    <fieldset>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-2 form_text">password :</div>
                        <div class="col-md-5">
                            <input id="password" name="password" type="password" class="contacttextform" onfocus="if (this.value == 'Please Insert Your Password') {this.value = '';}"value="Please Insert Your Password">
                        </div>
                    </fieldset>



                </div>




                <div class="splitnone">


                    <fieldset>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-7 form_text">
                            <div class="col-md-7 form_text">
                                <div class="col-md-7 form_text">
                                    <a href="create_profile.php"><input type="button" class="contactformbutton" value="Create account"></a>
                                </div>
                                <input type="submit" class="contactformbutton" value="login">
                            </div>
                            <a href="#"> <input type="button" class="contactformbutton" value="Forget Password"></a>

                        </div>
                        <div class="col-md-2">

                        </div>
                    </fieldset>

                    <br/><br/>

                </div>





            </form>







            <span class="box-arrow"></span>

        </div>
        <!-- End Full Width -->

    </div>
    <!-- End Main Body Wrap -->



<?php //require_once("includes/footer.php");?>