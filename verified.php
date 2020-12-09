<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 14/10/2015
 * Time: 13:37
 */

require ("includes/loggedin.php");
require_once("includes/header1.php");

?>


<div id="main-wrap">



    <!-- Start Full Width -->
    <div class="boxes-full">

        <div class="contacttitle">

            <h2 align="center">You are already varified:</h2>

        </div>


        <div class="boxes-padding fullpadding">

            <div id="contactwarning"></div>
            <div id="contactajax"></div>

            <form action="" method="post" name="ajaxcontactform" >


                <input name="contactformid" id="contactformid" type="hidden" value="1" />


                <div class="splitnone">

                    <fieldset>
                       <div id="cente"> Dear <?php echo $voter_name; ?> you are already verified</div>


                    </fieldset>



                </div>


                <div class="splitnone">


                    <fieldset>
                        <div class="col-md-3">
                        </div>

                        <div class="col-md-7 form_text">
                            <div class="col-md-7 form_text">

                                <input type="submit" class="contactformbutton" value="recovery your verification Details...">
                            </div>

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
