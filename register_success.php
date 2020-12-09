<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 01/10/2015
 * Time: 11:36
 */
require_once("includes/loggedin.php");
require_once("includes/header1.php");


?>

<div id="main-wrap">



    <!-- Start Full Width -->
    <div class="boxes-full">

        <div class="contacttitle">

            <h2 align="center">VERIFIED! verification Details:</h2>

        </div>


        <div class="boxes-padding fullpadding">

            <div id="contactwarning"></div>
            <div id="contactajax"></div>

            <form action="print.php" method="post" name="ajaxcontactform" >


                <input name="contactformid" id="contactformid" type="hidden" value="1" />


                <div class="splitnone">

                    <fieldset>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-2 form_text">election I.D:</div>
                        <div class="col-md-5">
                            voter_number: <?php echo $voter_id;?>
                            </div>

                    </fieldset>



                </div>


                <div class="splitnone">


                    <fieldset>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-2 form_text">duplicate</div>
                        <div class="col-md-5">
                            copy of voter I.D had been sent into your email <?php echo $email?>
                            </div>
                    </fieldset>



                </div>




                <div class="splitnone">


                    <fieldset>
                        <div class="col-md-3">
                        </div>

                        <div class="col-md-7 form_text">
                            <div class="col-md-7 form_text">

                                <input type="submit" class="contactformbutton" value="Print...">
                            </div>
                           <a href="election_portal.php"> <input type="button" class="contactformbutton" value="Goto Election portal..... "></a>
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
