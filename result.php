<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 01/11/2015
 * Time: 13:17
 */
include_once("includes/loggedin.php");
include_once("includes/header1.php");

?>
<div id="main-wrap">



    <!-- Start Full Width -->
    <div class="boxes-full">

        <div class="contacttitle">

            <h2 align="center">Result of 2016 NANS election:</h2>

        </div>


        <div class="boxes-padding fullpadding">

            <div id="contactwarning"></div>
            <div id="contactajax"></div>

            <form action="" method="post" name="ajaxcontactform" >


                <input name="contactformid" id="contactformid" type="hidden" value="1" />


                <div class="splitnone">


                    <fieldset>
                        <div id="center"><a href="result_presidential.php">PRESIDENTIAL ELECTION RESULT</a></div>
                    </fieldset>


                 </div>



                <div class="splitnone">


                    <fieldset>
                        <div id="center"><a href="result_v_president.php">VICE PRESIDENT ELECTION RESULT</a></div>
                    </fieldset>

                </div>



                <div class="splitnone">


                    <fieldset>
                        <div id="center"><a href="result_secretary.php">SECRETARY GENERAL ELECTION RESULT</a></div>
                    </fieldset>

                </div>



                <div class="splitnone">


                    <fieldset>
                        <div id="center"><a href="result_treasure.php">TREASURE ELECTION RESULT</a></div>
                    </fieldset>

                </div>



                <div class="splitnone">


                    <fieldset>
                        <div id="center"><a href="result_financial.php">FINANCIAL ELECTION RESULT</a></div>
                    </fieldset>

                </div>



            </form>







            <span class="box-arrow"></span>

        </div>
        <!-- End Full Width -->

    </div>

