<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 10/02/2016
 * Time: 10:14
 */
require 'includes/admin_loggedin.php';
require_once('includes/header2.php');
?>

<div id="main-wrap" xmlns="http://www.w3.org/1999/html">


    <!-- Start Full Width -->
    <div class="boxes-full">

        <fieldset>
            <legend><h2>Select School</h2></legend>
        </fieldset>
        <form action="admin_viewStudent.php" method="post">

            <label class="control-label col-sm-3" for="inputA">school :</label>
            <div class="controls col-md-7">
                <select id="gender" name="school" type="text" class="contacttextform">
                    <option value="" onFocus="" selected>please select School</option>
                    <option value="KUST">KANO UNIVERSITY OF SCIENCE AND TECHNOLOGY, WUDIL</option>
                    <option value="BUK">BAYERO UNIVERSITY, KANO</option>
                    <option value="ABU">AHMADU BELLO UNIVERSITY, ZARIA</option>
                </select>
            </div>


            <div class="col-md-7 form_text">

                <input type="submit"class="contactformbutton" value="generate">
            </div>
        </form>
    </div>
<?php  if(isset($_POST['school'])) {
    $school = $_POST['school'];

    if (!empty($school)) {

        if ($school == "KUST") {
            $sch = "Kano University Of Science And Technology Wudil";
        } elseif ($school == "ABU") {
            $sch = "Ahmadu Bello University Zaria";
        }elseif
            ($school = "BUK"){
            $sch = "Bayero University Kano";

        }



        echo '<div class="boxes-full">';
        echo ' <fieldset>
            <legend><h2>' . $sch . '</h2></legend>
            </fieldset>';

        echo ' <table width="100%" border="1px" >
                            <th>
                                <td width="5%">S/N</td>
                                 <td width="10%">Regno</td>
                                <td width="30%">NAME</td>
                                <td width="20%">Faculty</td>
                                 <td width="20%">Department</td>
                                <td width="15%">Programme</td>
                                <td width="20%">level<percentage/td>
                            </th>';
        $query = "SELECT * FROM `$school`";
        $query_run = mysql_query($query);
        $numberRow = mysql_num_rows($query_run);

        $count = mysql_numrows($query_run);
        $i = 0;

        while ($i < $count) {
            $regno = mysql_result($query_run, $i, 'regno');
            $fname = mysql_result($query_run, $i, 'firstname');
            $mname = mysql_result($query_run, $i, 'middlename');
            $lname = mysql_result($query_run, $i, 'lastname');
            $faculty = mysql_result($query_run, $i, 'faculty');
            $dept = mysql_result($query_run, $i, 'department');
            $programme = mysql_result($query_run, $i, 'programme');
            $level = mysql_result($query_run, $i, 'level');
            $i++;
            $name = $fname . " " . $mname . " " . $lname;
            echo '<div id="center">';
            echo '<tr ><td></td> <td >' . $i . '</td><td>' . $regno . ' </td><td>' . $name . ' </td> <td>' . $faculty . ' </td>  <td>' . $dept . '</td> <td>' . $programme . '</td><td>' . $level . '</td> </tr>';

        }
    }
}


