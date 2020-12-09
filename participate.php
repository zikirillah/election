<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 02/10/2015
 * Time: 20:07
 */
require ("includes/loggedin.php");
require_once("includes/header1.php");

if(isset($_POST['name'])&& isset($_POST['school'])&& isset($_POST['level'])&& isset($_POST['regno'])&& isset($_POST['pass_word'])&& isset($_POST['dept'])){
    $name = $_POST['name'];
    $school = $_POST['school'];
    $level = $_POST['level'];
    $regno = $_POST['regno'];
    $pass_word = $_POST['pass_word'];
    $dept = $_POST['dept'];

    if(!empty($name) &&!empty($school) &&!empty($level) &&!empty($regno)&&!empty($pass_word)&&!empty($dept)){

        if($password == $pass_word){

            $query = "SELECT `regno` FROM `$school` WHERE `regno` = '$regno'";
            $query_run = mysql_query($query);

            if (mysql_num_rows($query_run) == 1) {

                $query = "SELECT `regno` FROM `voters` WHERE `regno` = '$regno'";
                $query_run = mysql_query($query);
                if (mysql_num_rows($query_run) == 1) {
                    $done= 'you have already verified!';
                    echo $done;
                }else{
                  $i=0;
                   do{ $voter_number = rand(10000,100000000);

                    $qry = "SELECT `$voter_number` FROM `voters` WHERE `voter_number`='$voter_number'";
                    if($qry_run = mysql_query($qry)){

                        if (mysql_num_rows($qry_run) == 1) {
                            $i = 0;
                        }else{
                            $i=1;
                        }

                    }}while($i==1);

                    $query = "INSERT INTO `voters` VALUES('" . $_SESSION['user_id'] . "','" . $name . "','" . $school . "','" . $dept . "','" . $level . "','" . $regno . "','" . $voter_number . "','','','','','')";

                    if ($query_run = mysql_query($query)) {
                        header('location: register_success.php');
                        die();
                    }else{
                        echo '<script type="text/javascript">cant_verified();</script>';
                    }
                }


            }else{
                $not_student = "you're not a student of this".$school;
                echo $not_student;
            }
        }else{
            echo '<script type="text/javascript">invalid_password();</script>';

        }

    }else{
        echo '<script type="text/javascript">require();</script>';

    }

}

?>

<div id="main">
<br/><br/><br/>
    <!-- Start H1 Title -->
    <div class="titlesnormal">

    	<h1>verify with your school name and registration number to get your election I.D number</h1>

        <span></span>

    </div>
    <!-- End H1 Title -->
    <!-- Start Main Body Wrap -->
    <div id="main-wrap">



        <!-- Start Full Width -->
        <div class="boxes-full">

            <div class="contacttitle">

                <h2 align="center">e-election verification Details</h2>

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

                <fieldset>
                <div class="col-md-3">
                        </div>
                		<div class="col-md-2 form_text">name :</div>
                        <div class="col-md-5">
                    	<input name="name" type="text" class="contacttextform"value="<?php echo $firstname." "; echo $middlename." "; echo $lastname;?>">
                        </div>

                </fieldset>



                 </div>


                <div class="splitnone">


                <fieldset>
                <div class="col-md-3">
                        </div>
                		<div class="col-md-2 form_text">name of your school :</div>
                        <div class="col-md-5">
                            <select id="gender" name="school" type="text" class="contacttextform" required="" value="<?php if(isset($school)){ echo $school;} ?>" placeholder="Please Select Your School">
                                <option value="" onFocus="" selected>please select your school</option>
                                <option value="KUST">KANO UNIVERSITY OF SCIENCE AND TECHNOLOGY, WUDIL</option>
                                <option value="BUK">BAYERO UNIVERSITY, KANO</option>
                                <option value="ABU">AHMADU BELLO UNIVERSITY, ZARIA</option>


                            </select>
                    	</div>
                </fieldset>



                 </div>


                 <div class="splitnone">

                    <fieldset>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-2 form_text">Department :</div>
                        <div class="col-md-5">
                            <input name="dept" type="text" class="contacttextform"required="" value="<?php if(isset($dept)){ echo $dept;} ?>" placeholder="Please Insert Your department">
                        </div>

                    </fieldset>



                </div>


                <div class="splitnone">

                    <fieldset>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-2 form_text">registration number :</div>
                        <div class="col-md-5">
                            <input name="regno" type="text" class="contacttextform"required="" value="<?php if(isset($regno)){ echo $regno;} ?>" placeholder="Please Insert Your registration number">
                        </div>

                    </fieldset>



                </div>

                <div class="splitnone">

                    <fieldset>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-2 form_text">level:</div>
                        <div class="col-md-5">
                            <select id="gender" name="level" type="text" class="contacttextform" onfocus="if (this.value == 'Please Select Your Gender') {this.value = '';}">
                                <option value="" onFocus="" selected>please select your Level</option>
                                <option value="100">100Level</option>
                                <option value="200">200Level</option>
                                <option value="300">300Level</option>
                                <option value="400">400Level</option>
                                <option value="500">500Level</option>
                                <option value="spill">spill over</option>


                            </select>
                        </div>

                    </fieldset>



                </div>

                <div class="splitnone">

                    <fieldset>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-2 form_text">password :</div>
                        <div class="col-md-5">
                            <input name="pass_word" type="password" class="contacttextform"onfocus="if (this.value == 'Please Insert Your Password') {this.value = '';}"value="Please Insert Your Password">
                        </div>

                    </fieldset>



                </div>




                 <div class="splitnone">


                <fieldset>
                <div class="col-md-3">
                        </div>
                		<div class="col-md-7 form_text">
                        <input type="submit" class="contactformbutton" value="Verify">
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
    <!-- End Main Body Wrap -->



<?php require_once("includes/footer.php");?>