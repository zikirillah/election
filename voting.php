<?php
require ("includes/loggedin.php");
require_once("includes/header1.php");
//if(!varified()){
   //header('location:election-portal.php');
//}
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 14/11/2015
 * Time: 08:22
 */


//check wheather u have varified.
$query = "SELECT `voter_number` FROM `voters` WHERE `id`='".$_SESSION['user_id']."'";
if($query_run = mysql_query($query)) {

    /**while ($row = mysql_fetch_array($query_run)){
        $voter_number = $row['voter_number'];
        if($voter_number==''){

        }else{
            echo '<script type="text/javascript">done();</script>';

            die();
        }


    }*/
    $query_num_rows = mysql_num_rows($query_run);
    if($query_num_rows==0){
        echo '<script type="text/javascript">not_verified();</script>';

        die();
    }
}else{

}
//end of checking
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

            <h2 align="center">Select the position you wish to start</h2>

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
                    <?php  $query = "SELECT `p`,`vp`,`sg`,`f`,`t` FROM `voters` WHERE `id`= '".$_SESSION['user_id']."'";
                    if ($query_run = mysql_query($query)) {

                        while ($row = mysql_fetch_array($query_run)) {
                            $president = $row['p'];
                            $vice_president = $row['vp'];
                            $sec_gen = $row['sg'];
                            $financial = $row['f'];
                            $treasure = $row['t'];


                        }
                    }?>

                    <fieldset>
                        <div id="center"><?php if($president==''){ echo'<a href="presidential.php">';} ?>PRESIDENTIAL ELECTION</a></div>

                    </fieldset>

                </div>



                <div class="splitnone">

                    <fieldset>
                        <div id="center"><?php if($vice_president==''){ echo'<a href="vice_president.php">';} ?>VICE PRESIDENT ELECTION</a></div>

                    </fieldset>



                </div>




                <div class="splitnone">

                    <fieldset>
                        <div id="center"><?php if($sec_gen==''){ echo'<a href="secretary.php">';} ?>SECRETARY GENERAL ELECTION</a></div>

                    </fieldset>



                </div>


               <div class="splitnone">

                    <fieldset>
                        <div id="center"><?php if($financial==''){ echo'<a href="financial.php">';} ?>FINANCIAL SECRETARY ELECTION</a></div>

                    </fieldset>



                </div>


                <div class="splitnone">

                    <fieldset>
                        <div id="center"><?php if($treasure==''){ echo'<a href="treasure.php">';} ?>TREASURE ELECTION</a></div>

                    </fieldset>



                </div>

                <div class="splitnone">

                    <fieldset>
                        <div id="center"><?php if(4==4){ echo'<a href="ass_sec_gen.php">';} ?>ASSISTANCE SECRETARY GENERAL ELECTION</a></div>

                    </fieldset>



                </div>





                <div class="splitnone">

                    <fieldset>
                        <div id="center"><?php if(4==4){ echo'<a href="sport_director.php">';} ?>SPORT DIRECTOR ELECTION</a></div>

                    </fieldset>

                </div>



                <div class="splitnone">

                    <fieldset>
                        <div id="center"><?php if(4==4){ echo'<a href="director_contact.php">';} ?>DIRECTOR OF CONTACT AND MOBILIZATION ELECTION</a></div>

                    </fieldset>

                </div>



                <div class="splitnone">

                    <fieldset>
                        <div id="center"><?php if(4==4){ echo'<a href="director_transport.php">';} ?>DIRECTOR OF TRANSPORT ELECTION</a></div>

                    </fieldset>

                </div>



                <div class="splitnone">

                    <fieldset>
                        <div id="center"><?php if(4==4){ echo'<a href="director_special.php">';} ?>DIRECTOR OF SPECIAL DUTIES ELECTION</a></div>

                    </fieldset>



                </div>














            </form>







            <span class="box-arrow"></span>

        </div>
        <!-- End Full Width -->

    </div>
    <!-- End Main Body Wrap -->



<?php require_once("includes/footer.php");?>