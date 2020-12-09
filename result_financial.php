<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 16/11/2015
 * Time: 19:59
 */



include_once("includes/loggedin.php");
include_once("includes/header1.php");

?>
<script type="text/javascript">
    change();
</script>
<div id="main-wrap">



    <!-- Start Full Width -->
    <div class="boxes-full">

        <div class="contacttitle">

            <h2 align="center">Financial Secretary Result of 2016 NANS election:</h2>

        </div>


        <div class="boxes-padding fullpadding">

            <div id="contactwarning"></div>
            <div id="contactajax"></div>

            <form action="" method="post" name="ajaxcontactform" >


                <input name="contactformid" id="contactformid" type="hidden" value="1" />

                <div class="splitnone">
                    <fieldset>
                        <div id="center">
                            <table width="100%" border="1px" >
                                <th>
                                <td width="10%">S/N</td>
                                <td width="40%">NAME</td>
                                <td width="30%">SCHOOL</td>
                                <td width="20%">NUMBER OF VOTES</td>
                                </th><?php
                                $query= "SELECT `name`,`votes`,`school` FROM `financial` WHERE votes =(SELECT MAX(votes) FROM `financial`)";
                                $query_run = mysql_query($query);
                                $numberRow = mysql_num_rows($query_run);

                                $count = mysql_numrows($query_run);
                                $i=0;
                                $x=1;
                                while ($i<$count) {
                                    $name = mysql_result($query_run, $i, 'name');
                                    $max_votes = mysql_result($query_run, $i, 'votes');
                                    $school= mysql_result($query_run, $i, 'school');


                                    echo '<tr > <td></td>   <td color="red" size="5px"><font color="red" size="5px"> '.$x. '</font> </td><td> <font color="red" size="5px">'.$name . ' </td><td> <font color="red" size="5px">'.$school . ' </td>  <td><font color="red" size="5px">' . $max_votes . '</td> </tr>';
                                    $i++;

                                    $x++;
                                }?>






                                <?php

                                $query = "SELECT `name`,`votes`,`school` FROM `financial`";
                                $query_run = mysql_query($query);
                                $numberRow = mysql_num_rows($query_run);

                                $count = mysql_numrows($query_run);
                                $i=0;


                                while ($i<$count) {
                                    $name= mysql_result($query_run,$i,'name');
                                    $votes= mysql_result($query_run,$i,'votes');
                                    $school= mysql_result($query_run,$i,'school');

                                    $image = 'images/candidate/president/p0002.JPG';






                                    if($max_votes!=$votes) {
                                        echo '<div id="center">';
                                        echo '<tr > <td></td>   <td >'.$x. '</td><td>'.$name . ' </td><td>'.$school . ' </td>  <td>' . $votes . '</td> </tr>';

                                    }else{
                                        $x--;
                                    }
                                    $i++;
                                    $x++;}
                                ?>

                            </table>

                        </div>
                    </fieldset>







                </div>



            </form>







            <span class="box-arrow"></span>

        </div>
        <!-- End Full Width -->

    </div>