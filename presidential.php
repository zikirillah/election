<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 26/09/2015
 * Time: 09:23
 */

require ("includes/loggedin.php");
require_once("includes/header1.php");

//check wheather u have already voted or not.
$query = "SELECT `p` FROM `voters` WHERE `id`='".$_SESSION['user_id']."'";
if($query_run = mysql_query($query)) {

    while ($row = mysql_fetch_array($query_run)){
        $p = $row['p'];
        if($p==''){

        }else{
            echo '<script type="text/javascript">done();</script>';

            die();
        }


    }
    $query_num_rows = mysql_num_rows($query_run);
    if($query_num_rows==0){
        echo '<script type="text/javascript">not_verified();</script>';

        die();
    }
}else{

}




//posting selected candidate
if(isset($_POST['president'])) {
    $president = $_POST['president'];
    if (!empty($president)) {
       // $query = "SELECT `votes` FROM `president` WHERE `candidate_id`= '".mysql_real_escape_string($president)."'";
        $query = "UPDATE `president` SET `votes`=`votes`+1 WHERE `candidate_id`= '".mysql_real_escape_string($president)."'";
        if ($query_run = mysql_query($query)) {

         //   while ($row = mysql_fetch_array($query_run)) {
           //     $p_votes = $row['votes'];
             //   $p_votes++;
               // $query ="UPDATE `president` SET `votes`='$p_votes' WHERE `candidate_id`= '$president'";
                //if ($query_run = mysql_query($query)) {
                    $qry = "UPDATE `voters` SET `p` = '$president' WHERE `id`='".$_SESSION['user_id']."'";
                    if($qry_run = mysql_query($qry)){
                        header("location:voting.php");
                    }
                }
            }
      //  }
    //}
}
?>

<div id="main-wrap">



    <!-- Start Full Width -->
    <div class="boxes-full">

        <div class="contacttitle">

            <h2 align="center">2016 National Association Of Nigerian Student Election:<br> Presidential Ballot Paper</h2>

        </div>


        <div class="boxes-padding fullpadding">

            <div id="contactwarning"></div>
            <div id="contactajax"></div>

            <form action="<?php echo $current_file?>" method="post" name="ajaxcontactform" >


                <input name="contactformid" id="contactformid" type="hidden" value="1" />


                <?php

                /** fetching candidates from the database to generate a ballot paper*/
                $query = "SELECT `name`,`school`,`candidate_id`,`department`,`level`,`image`,`cgpa` FROM `president`";
                $query_run = mysql_query($query);
                $numberRow = mysql_num_rows($query_run);

                $count = mysql_numrows($query_run);
                $i=0;

                    while ($i<$count) {
                        $name= mysql_result($query_run,$i,'name');
                        $school= mysql_result($query_run,$i,'school');
                        $department= mysql_result($query_run,$i,'department');
                        $level= mysql_result($query_run,$i,'level');
                        $cgpa= mysql_result($query_run,$i,'cgpa');
                        $candidate_id= mysql_result($query_run,$i,'candidate_id');
                        $img = mysql_result($query_run,$i,'image');
                        $image = 'uploads/candidate/'.$img;


                        //heres our alternating hach

                        /*if($css !="depth-1"){
                            $css = "depth";
                        }else{
                            $css = "thread-alt depth-1";
                        }*/



                echo '<div class="splitnone">';

                        echo ' <fieldset>
                        <div class="col-md-3">';
                 echo "<input type='radio' name='president' value=".$candidate_id.">";
                        echo '</div>

                        <div class="col-md-2 form_text">'; echo '<img src="'.$image.'" height="150" width="150">';
                echo '</div>
                        <div class="col-md-5">';

                            echo 'NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$name.'<br>';
                            echo 'SCHOOL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$school.'<br>';
                            echo 'DEPARTMENT:'.$department.'<br>';
                            echo 'LEVEL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$level.'<br>';
                            echo 'CGPA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$cgpa.'<br>';

                        echo '</div>

                    </fieldset>



                </div>';
                        $i++;

                     } ?>


                <div class="splitnone">


        <fieldset>
            <div class="col-md-3">
            </div>

            <div class="col-md-7 form_text">


                <input type="submit" class="contactformbutton" value="submit">
            </div>

            <div class="col-md-2">

            </div>
        </fieldset>

        <br/><br/>

    </div>









    </form>







    \<span class="box-arrow"></span>

</div>
<!-- End Full Width -->

</div>
