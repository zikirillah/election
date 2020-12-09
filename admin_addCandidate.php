<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 29/11/2015
 * Time: 11:45
 */


require 'includes/admin_loggedin.php';
require_once('includes/header2.php');
$src="";

//image
function getImageExtension($imagetype){
    if(empty($imagetype))return false;
    switch($imagetype){
        case 'image/bmp' : return '.bmp';
        case 'image/gif' : return '.gif';
        case 'image/jpeg' : return '.jpeg';
        case 'image/png' : return '.png';
        default : return false;
    }
}


if(isset($_FILES['userFile']['name']) && !empty($_FILES['userFile']['name'])){
    // echo "goooooooooood";
    $file_name = $_FILES["userFile"]["name"];
    $temp_name = $_FILES["userFile"]["tmp_name"];
    $imgtype = $_FILES["userFile"]["type"];
    $ext = getImageExtension($imgtype);
    $image_name = date("d-m-Y") . "-" . time() . $ext;
    $target_path = "uploads/candidate/".$image_name;

    //global $target_path;
    //$_POST['target_path'] = $target_path;

    if(move_uploaded_file($temp_name,$target_path)){
      //  echo "image successfully uploaded";
    }else{
        echo "image upload failed";
    }
}else{
    // echo "pls choose a file";
    // echo "please select the image to be uploaded";



}

if(isset($_POST['name'])&& isset($_POST['school'])&& isset($_POST['level'])&& isset($_POST['cgpa'])&& isset($_POST['id'])&& isset($_POST['dept'])&& isset($_POST['position'])) {
    $name = $_POST['name'];
    $school = $_POST['school'];
    $dept = $_POST['dept'];
    $c_id = $_POST['id'];
    $level = $_POST['level'];
    $cgpa = $_POST['cgpa'];
    $position = $_POST['position'];


     if (!empty($name) && !empty($school) && !empty($level) && !empty($c_id) && !empty($cgpa) && !empty($dept)&& !empty($position)&& !empty($image_name)) {

         $query = "SELECT `candidate_id` FROM `$position` WHERE `candidate_id` = '$c_id'";
         $query_run = mysql_query($query);

         if (mysql_num_rows($query_run) == 1) {

             echo '<script type="text/javascript">inusername();</script>';

         } else {
             $query = "INSERT INTO `$position` VALUES('" . $c_id . "','" . $name . "','" . $school . "','" . $dept . "','" . $level . "','" . $cgpa . "','','".$image_name."')";
             //$query_run = mysql_query($query);

             if ($query_run =mysql_query($query)) {
                 echo '<script type="text/javascript">complete();</script>';
                 $c_id ='';
                 $school='';
                 $dept='';
                 $cgpa='';
             } else {
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
            <legend><h2>add candidate </h2></legend>


                <form action="admin_addCandidate.php" method="post" enctype="multipart/form-data">

                    <div class="split31">

                <h3>profile pic &nbsp;</h3>
                    <p><img name="preview" src="<?php
                        if ($src == ""){
                               echo 'images/avatar.jpg';
                        }else{
                                echo 'uploads/$pic_name';}?>" width="100" height="100" alt="">

                             <input  name="userFile" type="file" size="1" required="" onfocus="if (this.value == 'Please Select Your Profile Picture') {this.value = '';}"value="Please Select Your Profile Picture">

                    </p>


                    <div id="dom_target" style="display:none;"><?php
                        $output = $target_path;
                        echo htmlspecialchars($output);
                            /* You have to escape because the result will not be a valid HTML otherwise */
                            ?>
                    </div>


                </div>



                  <div class="split231">


                <fieldset>
                		<div class="col-md-3 form_text">Name :</div>
                        <div class="col-md-9">
                    	<input id="name" name="name" type="text" class="form-control" required="" value="<?php //if(isset($name)){ echo $firstname;} ?>" placeholder="Please Insert Your First Name">
                        </div>
                </fieldset>



                 </div>





                <div class="split231">


                <fieldset>
                		<div class="col-md-3 form_text">School :</div>
                        <div class="col-md-9">
                    	<input id="school" name="school" type="text" class="form-control" required="" value="<?php if(isset($school)){ echo $school;}?>" placeholder="Please Insert Your First Name">
                        </div>
                </fieldset>



                 </div>





                 <div class="split231">


                <fieldset>
                		<div class="col-md-3 form_text">Department :</div>
                        <div class="col-md-9">
                    	<input id="dept" name="dept" type="text" class="form-control" required="" value="<?php if(isset($dept)){ echo $dept;}?>" placeholder="Please Insert Your First Name">
                        </div>
                </fieldset>



                 </div>



                 <div class="split231">


                <fieldset>
                		<div class="col-md-3 form_text">candidate_id :</div>
                        <div class="col-md-9">
                    	<input id="id" name="id" type="text" class="form-control" required="" value="<?php if(isset($c_id)){ echo $c_id;}?>" placeholder="Please Insert Your First Name">
                        </div>
                </fieldset>



                 </div>






                    <div class="split231">


                <fieldset>
                		<div class="col-md-3 form_text">CGPA :</div>
                        <div class="col-md-9">
                    	<input id="cgpa" name="cgpa" type="text" class="form-control" required="" value="<?php if(isset($cgpa)){ echo $cgpa;}?>" placeholder="Please Insert Your First Name">
                        </div>
                </fieldset>



                 </div>





                    <div class="split231">
                 <label class="col-md-3 form_text" >LEVEL :</label>
                <div class="col-md-9">
                    <select id="gender" name="level" type="text" class="form-control" onfocus="if (this.value == 'Please Select Your level') {this.value = '';}">
                        <option value="" onFocus="" selected>please select your Level</option>
                        <option value="200">200Level</option>
                        <option value="300">300Level</option>
                        <option value="400">400Level</option>
                    </select><br><br>
                </div> </div>



                    <div class="split231">
                <label class="col-md-3 form_text">position :</label>
                <div class="col-md-9">
                    <select id="gender" name="position" type="text" class="form-control" onfocus="if (this.value == 'Please Select Your Gender') {this.value = '';}">
                        <option value="" onFocus="" selected>please select his position</option>
                        <option value="president">president</option>
                        <option value="vice_president">vice_president</option>
                        <option value="secretary">secretary general</option>
                        <option value="treasure">treasure</option>
                        <option value="financial">financial secretary</option>



                    </select><br><br>
                </div> </div>






                <div class="col-md-7 form_text">


                    <input type="submit" class="contactformbutton" value="submit">
                   <br>
                </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>





    </form>
    </div>
    </div>
    </div>
</body>
<?php require_once("includes/footer.php");?>