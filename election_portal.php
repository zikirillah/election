<?php
require ("includes/loggedin.php");
require_once("includes/header1.php");
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 26/09/2015
 * Time: 09:23
 */
if(isset($_POST['voter_number'])){
    $voter_number = $_POST['voter_number'];

    if(!empty($voter_number) && !empty($voter_id)){

        if( $voter_id == $voter_number){
            function varified(){
                return true;
            }
            //header('location: voting.php');
            header('location:voting.php');
        }else{
            echo '<script type="text/javascript">invalid_verified();</script>';

        }
    } echo '<script type="text/javascript">unverified();</script>';

}
?>

    <div id="main">
    <br/><br/><br/>
    <!-- Start H1 Title -->
    <div class="titlesnormal">

        <h1>Welcome to 2016 national Associate Of Nigerian Student Election Portal.</h1>

        <span></span>

    </div>
    <!-- End H1 Title -->
    <!-- Start Main Body Wrap -->
    <div id="main-wrap">



    <!-- Start Full Width -->
    <div class="boxes-full">

        <div class="contacttitle">

            <h2 align="center">accreditation</h2>

        </div>


        <div class="boxes-padding fullpadding">

            <div id="contactwarning"></div>
            <div id="contactajax"></div>

            <form action="<?php echo $current_file; ?>" method="post" name="ajaxcontactform" >


                <input name="contactformid" id="contactformid" type="hidden" value="1" />


                <div class="splitnone">

                    <fieldset>
                        <div id="center">please enter your voter_number in the box provide to verified your eligibility
                            </div>
                    </fieldset>

                </div>


                <div class="splitnone">

                    <fieldset>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-2 form_text">voter_number :</div>
                        <div class="col-md-5">
                            <input name="voter_number" type="text" class="contacttextform"placeholder="enter your voter number" required=""">
                        </div>

                    </fieldset>



                </div>



                <div class="splitnone">


                    <fieldset>

                        <div class="col-md-9 form_text">
                            <input type="submit" class="contactformbutton" value="Verify">
                        </div>

                    </fieldset>

                    <br/><br/>

                </div>




                <div class="splitnone">

                    <fieldset>
                        <div id="center">if you don't know whats VOTER NUMBER click <a href="#">here</a>
                        </div>
                    </fieldset>

                </div>



















            </form>







            <span class="box-arrow"></span>

        </div>
        <!-- End Full Width -->

    </div>
    <!-- End Main Body Wrap -->



<?php require_once("includes/footer.php");?>