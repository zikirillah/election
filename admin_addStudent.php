<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 10/02/2016
 * Time: 08:40
 */

require 'includes/admin_loggedin.php';
require_once('includes/header2.php');


if(isset($_POST['fname'])&& isset($_POST['school'])&& isset($_POST['level'])&& isset($_POST['regno'])&& isset($_POST['mname'])&& isset($_POST['lname'])&& isset($_POST['dept'])&& isset($_POST['faculty'])&& isset($_POST['programme'])) {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $school = $_POST['school'];
    $dept = $_POST['dept'];
    $regno = $_POST['regno'];
    $level = $_POST['level'];
    $faculty = $_POST['faculty'];
    $programme = $_POST['programme'];


   if (!empty($fname) && !empty($school) && !empty($regno) && !empty($level) && !empty($faculty) && !empty($programme) && !empty($dept) && !empty($mname) && !empty($lname)) {

       $query = "SELECT `regno` FROM `$school` WHERE `regno` = '$regno'";
        $query_run = mysql_query($query);

        if (mysql_num_rows($query_run) == 1) {

            echo '<script type="text/javascript">inusername();</script>';

        } else {

            $query = "INSERT INTO `$school` VALUES('" . $regno . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $faculty . "','" . $dept . "','" . $programme . "','" . $level . "')";
            //$query_run = mysql_query($query);

            if ($query_run = mysql_query($query)) {
                echo '<script type="text/javascript">complete();</script>';
                $fname = '';
                $school = '';
                $dept = '';
                $cgpa = '';
            } else {
                echo  "uncomplete";
                echo '<script type="text/javascript">uncomplete();</script>';
            }

        }
   }

}


?>
<div id="main-wrap" xmlns="http://www.w3.org/1999/html">



    <!-- Start Full Width -->
    <div class="boxes-full">

        <div class="boxes-padding fullpadding">
            <fieldset>
                <legend><h2>add Student </h2></legend>

                <form action="admin_addstudent.php" method="post" enctype="multipart/form-data">


                    <div class="split231">


                        <fieldset>
                            <div class="col-md-3 form_text">select school</div>
                            <div class="col-md-9">
                                <select id="gender" name="school" type="text" class="contacttextform" required="" value="<?php if(isset($school)){ echo $school;} ?>" placeholder="Please Select Your School">
                                    <option value="" onFocus="" selected>please select your school</option>
                                    <option value="KUST">KANO UNIVERSITY OF SCIENCE AND TECHNOLOGY, WUDIL</option>
                                    <option value="BUK">BAYERO UNIVERSITY, KANO</option>
                                    <option value="ABU">AHMADU BELLO UNIVERSITY, ZARIA</option>


                                </select>
                            </div>
                        </fieldset>



                    </div>


                    <div class="split231">


                        <fieldset>
                            <div class="col-md-3 form_text">RegNo :</div>
                            <div class="col-md-9">
                                <input id="name" name="regno" type="text" class="form-control" required="" value="<?php if(isset($regno)){ echo $regno;} ?>" placeholder="Please Insert Your Registration number">
                            </div>
                        </fieldset>



                    </div>



                    <div class="split231">


                        <fieldset>
                            <div class="col-md-3 form_text">first name :</div>
                            <div class="col-md-9">
                                <input id="name" name="fname" type="text" class="form-control" required="" value="<?php if(isset($fname)){ echo $fname;} ?>" placeholder="Please Insert Your First Name">
                            </div>
                        </fieldset>



                    </div>



                    <div class="split231">


                        <fieldset>
                            <div class="col-md-3 form_text">middle name :</div>
                            <div class="col-md-9">
                                <input id="name" name="mname" type="text" class="form-control" required="" value="<?php if(isset($mname)){ echo $mname;} ?>" placeholder="Please Insert Your Last Name">
                            </div>
                        </fieldset>



                    </div>




                    <div class="split231">


                        <fieldset>
                            <div class="col-md-3 form_text">last name :</div>
                            <div class="col-md-9">
                                <input id="name" name="lname" type="text" class="form-control" required="" value="<?php if(isset($lname)){ echo $lname;} ?>" placeholder="Please Insert Your First Name">
                            </div>
                        </fieldset>



                    </div>




                    <div class="split231">


                        <fieldset>
                            <div class="col-md-3 form_text">Faculty :</div>
                            <div class="col-md-9">
                                <input id="name" name="faculty" type="text" class="form-control" required="" value="<?php if(isset($faculty)){ echo $faculty;} ?>" placeholder="Please Insert Your First Name">
                            </div>
                        </fieldset>



                    </div>



                    <div class="split231">


                        <fieldset>
                            <div class="col-md-3 form_text">Department :</div>
                            <div class="col-md-9">
                                <input id="name" name="dept" type="text" class="form-control" required="" value="<?php if(isset($dept)){ echo $dept;} ?>" placeholder="Please Insert Your First Name">
                            </div>
                        </fieldset>



                    </div>




                    <div class="split231">


                        <fieldset>
                            <div class="col-md-3 form_text">Programme :</div>
                            <div class="col-md-9">
                                <input id="name" name="programme" type="text" class="form-control" required="" value="<?php if(isset($programme)){ echo $programme;} ?>" placeholder="Please Insert Your First Name">
                            </div>
                        </fieldset>



                    </div>



                    <div class="split231">


                        <fieldset>
                            <div class="col-md-3 form_text">Level:</div>
                            <div class="col-md-9">
                                <input id="name" name="level" type="number" class="form-control" required="" value="<?php if(isset($level)){ echo $level;} ?>" placeholder="Please Insert Your First Name">
                            </div>
                        </fieldset>



                    </div>


                    <div class="col-md-7 form_text">


                        <input type="submit" class="contactformbutton" value="submit">
                        <br>
                    </div>