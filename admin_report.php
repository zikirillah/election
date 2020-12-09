<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 24/12/2015
 * Time: 09:04
 */
require 'includes/admin_loggedin.php';
require_once('includes/header2.php');


function report_name($idx,$positio)
{
    $qry = "SELECT `name` FROM `$positio` WHERE `candidate_id`= '$idx'";
    if ($qry_run = mysql_query($qry)) {

        while ($row = mysql_fetch_array($qry_run)) {
            $c_name = $row['name'];
            return $c_name;
        }
    }
}

function report_votes($idx,$position_field)
{
    $qry = "SELECT `votes` FROM `$position_field` WHERE `candidate_id`= '$idx'";
    if ($qry_run = mysql_query($qry)) {
        while ($row = mysql_fetch_array($qry_run)) {
            $c_votes = $row['votes'];
            return $c_votes;
        }
    }
}

function total_votes_registered()
{
    $qry = "SELECT `school` FROM `voters` ";
    if ($qry_run = mysql_query($qry)) {
        $total_votes =  mysql_numrows($qry_run);


        return $total_votes;
    }
}

function total_votes_casted($position)
{
    $qry = "SELECT `$position` FROM `voters` WHERE `$position`!=''";
    if ($qry_run = mysql_query($qry)) {
        $total_votes_casted = mysql_num_rows($qry_run);
       // SELECT `p` FROM `voters`


        return $total_votes_casted;
    }
}

?>

<div id="main-wrap" xmlns="http://www.w3.org/1999/html">


    <!-- Start Full Width -->
    <div class="boxes-full">

        <fieldset>
            <legend><h2>Select Position</h2></legend>
            </fieldset>
        <form action="admin_report.php" method="post">

            <label class="control-label col-sm-3" for="inputA">position :</label>
            <div class="controls col-md-7">
            <select id="gender" name="position" type="text" class="contacttextform">
                <option value="" onFocus="" selected>please select his position</option>
                <option value="president">president</option>
                <option value="vice_president">vice_president</option>
                <option value="secretary">secretary general</option>
                <option value="treasure">treasure</option>
                <option value="financial">financial secretary</option>
            </select>
                </div>


            <div class="col-md-7 form_text">

            <input type="submit"class="contactformbutton" value="generate">
                </div>
            </form>
        </div>
<?php  if(isset($_POST['position'])) {
    $position = $_POST['position'];


    if($position=='president'){
        $posi = 'p';
    }else if($position=='vice_president'){
        $posi = 'vp';
    }else if($position=='secretary'){
        $posi = 'sg';
    }else if($position=='treasure'){
        $posi = 't';
    }else {
        $posi = 'f';
    }

    $total_votes_registered = total_votes_registered();



    if (!empty($position)){

        echo '<div class="boxes-full">';
        echo ' <fieldset>
            <legend><h2>'.$position.'</h2></legend>
            </fieldset>';

        echo ' <table width="100%" border="1px" >
                            <th>
                                <td width="5%">S/N</td>
                                <td width="40%">NAME</td>
                                <td width="20%">NUMBER OF VOTES</td>
                                 <td width="20%">NUMBER OF VOTES CASTED</td>
                                <td width="15%">percentage(%)</td>
                                <td width="20%">NUMBER OF REGISTERED VOTES<percentage/td>
                            </th>';


        $query = "SELECT `candidate_id`,`votes` FROM `$position` ORDER BY `votes` DESC";
        $query_run = mysql_query($query);
        $numberRow = mysql_num_rows($query_run);

        $count = mysql_numrows($query_run);
        $i=0;

        while ($i<$count) {

            $id = mysql_result($query_run, $i, 'candidate_id');
            $c_name= report_name($id, $position);
            $c_votes= report_votes($id,$position);
            $number_of_votes = total_votes_casted($posi);
            $percentage = ($c_votes/$number_of_votes)*100;
            $i++;
            echo '<div id="center">';
            echo '<tr > <td></td>   <td >'.$i. '</td><td>'.$c_name . ' </td><td>'.$c_votes . ' </td> <td>'.$number_of_votes . ' </td>  <td>' . $percentage . '</td> <td>' . $total_votes_registered . '</td> </tr>';



             if($i==$count){
                 echo '<input type="button" value="print" onclick="window.print()" class="contactformbutton">';
             }

        }
            /* $qry = "SELECT `name` FROM `$position` WHERE `candidate_id`= `$id`";
                  if ($qry_run = mysql_query($qry)) {

                      while ($row = mysql_fetch_array($qry_run)) {
                          $p_votes = $row['name'];
                      }
                  }
             $i++;
         }
         echo $id;

         $query = "SELECT `candidate_id` FROM `$position`";
         $query_run = mysql_query($query);
         $numberRow = mysql_num_rows($query_run);

         $count = mysql_numrows($query_run);
         $i=0;

         while($i<$count){
             $id= mysql_result($query_run,$i,'candidate_id');
            // function report($id,$position){
                 $qry = "SELECT `name` FROM `$position` WHERE `candidate_id`== `$id`";
                 if ($query_run = mysql_query($qry)) {
                     if ($query_name = mysql_result($query_run, 0, 'name')) {

                     }

                // }

             } $i++;
         }*/
    }
}?>
