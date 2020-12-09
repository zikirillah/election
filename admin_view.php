<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 29/11/2015
 * Time: 21:15
 */

require 'includes/admin_loggedin.php';
require_once('includes/header2.php');

?>
<div id="main-wrap" xmlns="http://www.w3.org/1999/html">



    <!-- Start Full Width -->
    <div class="boxes-full">



        <legend><h2><font color="red">Presidential Candidate</font> </h2></legend>
        <font color="black" size="5px">
            <div class="splitnone">
        <?php

        /** fetching candidates from the database to generate a ballot paper*/
        $query = "SELECT `name` FROM `president`";
        $query_run = mysql_query($query);
        $numberRow = mysql_num_rows($query_run);

        $count = mysql_numrows($query_run);
        $i=0;
        $x=1;

        while ($i<$count) {
            $name = mysql_result($query_run, $i, 'name');
            echo "&nbsp;&nbsp;     ".$x.":&nbsp;&nbsp;   " . $name;
          echo "<br><br>";
            $i++;
            $x++;
        }
        ?>

</font>
<br>
        <legend><h2 ><font color="red">Vice President Candidate</font> </h2></legend>
        <font color="black" size="5px">
            <div class="splitnone">


                <?php

                /** fetching candidates from the database to generate a ballot paper*/
                $query = "SELECT `name` FROM `vice_president`";
                $query_run = mysql_query($query);
                $numberRow = mysql_num_rows($query_run);

                $count = mysql_numrows($query_run);
                $i=0;
                $x=1;

                while ($i<$count) {
                    $name = mysql_result($query_run, $i, 'name');
                    echo "&nbsp;&nbsp;     ".$x.":&nbsp;&nbsp;   " . $name;
                    echo " <br><br>";
                    $i++;
                    $x++;
                }
                ?>

        </font>
        </div>
    </div>