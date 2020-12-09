<?php
 /*   BeginOAWidget_Instance_2559022: #slideshow

    slideshowAddCaption=true;
    $(document).ready(function() {
        $('#slideshow').cycle({
            after:			slideshowOnCycleAfter, //the function that is triggered after each transition
            autostop:			false,     // true to end slideshow after X transitions (where X == slide count)
            fx:				'fade,',// name of transition effect
            pause:			false,     // true to enable pause on hover
            randomizeEffects:	true,  // valid when multiple effects are used; true to make the effect sequence random
            speed:			1000,  // speed of the transition (any valid fx speed value)
            sync:			true,     // true if in/out transitions should occur simultaneously
            timeout:		3000,  // milliseconds between slide transitions (0 to disable auto advance)
            fit:			true,
            height:		   '250px',
            width:         '300px'   // container width (if the 'fit' option is true, the slides will be set to this width as well)
        });
    });
    function slideshowOnCycleAfter() {
        if (slideshowAddCaption==true){
            $('#slideshow-caption').html(this.title);
        }
    }

    // EndOAWidget_Instance_2559022
 */

require 'includes/loggedin.php';


?>
<!--<form action="sample.php" method="post" enctype="multipart/form-data">
    <input type="file" name="userFile">
    <input type="submit" name="upload_btn" value="upload">
</form>-->
<?php
/*$target_path = "uploads/";
$target_path = $target_path.basename($_FILES['userFile']['name']);
echo $_FILES['userFile']['name'];
if(move_uploaded_file($_FILES['userFile']['tmp_name'],$target_path)){
    echo "image successfully uploaded";
}else{
    echo "image upload failed";
}

*/


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



   // echo "goooooooooood";
    if(isset($_FILES['userFile']['name']) && !empty($_FILES['userFile']['name'])){
        echo "goooooooooood";
        $file_name = $_FILES["userFile"]["name"];
        $temp_name = $_FILES["userFile"]["tmp_name"];
        $imgtype = $_FILES["userFile"]["type"];
        $ext = getImageExtension($imgtype);
        $image_name = date("d-m-Y") . "-" . time() . $ext;
        $target_path = "uploads/".$image_name;

        //global $target_path;
        //$_POST['target_path'] = $target_path;

        if(move_uploaded_file($temp_name,$target_path)){
            echo "image successfully uploaded";
        }else{
            echo "image upload failed";
        }
    }else{
        echo "pls choose a file";
        echo "please select the image to be uploaded";



}//
?>
<div class="split31">
                <h3>profile pic &nbsp;</h3>
    <form action="sample.php" method="post" enctype="multipart/form-data">
                    <p> <img name="preview" src="" width="100" height="100" alt="">

                    <input  type="file" name="userFile" >
        <input type="submit" value="submit" name="upload_btn" >
</form>
                    </p>


                    <div id="dom_target" style="display:none;"><?php
					$output = $target_path;
					echo htmlspecialchars($output);
					/* You have to escape because the result will not be a valid HTML otherwise */
					?>
</div>


<?php

// check if form is submitted
?>



<!--<p>
    <button name="data" id="data"  class="contactformbutton" type="button" value="data" onClick="getDATA()">Click</button>
</p>-->


</div>
<!--<link href="sample.css" rel="stylesheet" type="text/css" />
<script src="sample.js" type="text/javascript"></script>





<div id="slideshow">
    <!--All elements inside this will become slides
    <img src="images/slider-banners/slider01.jpg" width="300" height="200" title="Fariah Badge" />
    <img src="images/slider-banners/slider02.jpg" width="300" height="200" title="07' Grad" />
    <img src="images/slider-banners/slider03.jpg" width="300" height="200" title="07' Grad" />
    <!--<div title="sample title"> you can add blocks of text instead!</div>
    <img src="images/slider-banners/slider04.jpg" width="300" height="200" title="07'Class" />

</div>
<!--It is safe to delete this if captions are disabled
<div id="slideshow-caption"></div>-->




<input name="contactformid" id="contactformid" type="hidden" value="1" />




<?php
time();
?>

<div class="split31">
    <h3>profile pic &nbsp;</h3>
    <p><img name="preview" src="<?php
        if ($src == ""){
            echo 'images/avatar.jpg';
        }else{
            echo 'uploads/$pic_name';}?>" width="100" height="100" alt="">

        <input  name="userFile" type="file" size="1" onfocus="if (this.value == 'Please Select Your Profile Picture') {this.value = '';}"value="Please Select Your Profile Picture">

    </p>


    <div id="dom_target" style="display:none;"><?php
        $output = $target_path;
        echo htmlspecialchars($output);
        /* You have to escape because the result will not be a valid HTML otherwise */
        ?>
    </div>


    <?php


    ?>



    <!--<p>
        <button name="data" id="data"  class="contactformbutton" type="button" value="data" onClick="getDATA()">Click</button>
    </p>-->
    <?php
    /*
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
            if(isset($_POST['submit'])){
                echo "am ready";
            }
        }
    ?>
    <?php
        if(isset($_POST['submit'])){
            echo "am ready";
        }
        */
    ?>
    <!--<p><input type="submit" id="uploadfiles" name="uploadfiles" value="Upload Image" class="contactformbutton"/></p>-->
    <!--<p>
        <input type="button" id="submit"  name="submit" value="submit" class="contactformbutton"/>
    </p>-->
    <!--<p><a id="button_id" class="btn btn-lg btn-primary pull-right" href="create_profile.php" role="button">submit &raquo;</a></p>-->


</div>


<div class="split231">


    <fieldset>
        <div class="col-md-3 form_text">first name :</div>
        <div class="col-md-9">
            <input id="first_name" name="first_name" type="text" class="contacttextform" required="" value="<?php if(isset($firstname)){ echo $firstname;} ?>" placeholder="Please Insert Your First Name">
        </div>
    </fieldset>



</div>


<div class="split231">


    <fieldset>
        <div class="col-md-3 form_text">middle name :</div>
        <div class="col-md-9">
            <input id="last_name" name="middle_name" type="text" class="contacttextform" required="" value="<?php if(isset($middlename)){ echo $middlename;} ?>" placeholder="Please Insert Your Last Name">
        </div>
    </fieldset>



</div>
<div class="split231">


    <fieldset>
        <div class="col-md-3 form_text">sur name :</div>
        <div class="col-md-9">
            <input id="first_name" name="sur_name" type="text" class="contacttextform" required="" value="<?php if(isset($surname)){ echo $surname;} ?>" placeholder="Please Insert Your First Name">
        </div>
    </fieldset>



</div>
<div class="split231">


    <fieldset>
        <div class="col-md-3 form_text">Username:</div>
        <div class="col-md-9">
            <input id="occupation" name="username" type="text" class="contacttextform" required="" value="<?php if(isset($username)){ echo $username;} ?>" placeholder="Please Insert Unique Username">
        </div>
    </fieldset>



</div>






<div class="split231">


    <fieldset>
        <div class="col-md-3 form_text">Age :</div>
        <div class="col-md-9">
            <input id="age" name="age" type="text" class="contacttextform" required="" value="<?php if(isset($age)){ echo $age;} ?>" placeholder="Please Insert Your Age">
        </div>
    </fieldset>



</div>



<div class="split231">


    <fieldset>
        <div class="col-md-3 form_text">Gender :</div>
        <div class="col-md-9">
            <select id="gender" name="gender" type="text" class="contacttextform" required="" onfocus="if (this.value == 'Please Select Your Gender') {this.value = '';}">
                <option value="" onFocus="" selected>please select your gender</option>
                <option value="m"> male </option>
                <option value="f"> female </option>
            </select>
        </div>
    </fieldset>



</div>




<div class="split231">


    <fieldset>
        <div class="col-md-3 form_text">Relationship:</div>
        <div class="col-md-9">
            <select id="relationship" name="relationship" type="text" class="contacttextform" required="" onfocus="if (this.value == 'Please Select Your Relationship Status') {this.value = '';}">
                <option value="" selected>Please Select Your Relationship Status</option>

                <option value="single"> single </option>
                <option value="married"> married </option>
                <option value="divorced"> divorced </option>
            </select>
        </div>
    </fieldset>



</div>











<label class="control-label col-sm-3" for="inputA">Name :</label>
<div class="controls col-md-7">
    <input name="name" type="text" class="form-control" id="inputPassword"  value="<?php //if(isset($name)){ echo $name;}?>" placeholder="Fullname"><br><br>
</div>



<label class="control-label col-sm-3" for="inputA">school :</label>
<div class="controls col-md-7">
    <input name="school" type="text" class="form-control" id="inputPassword"  value="<?php if(isset($school)){ echo $school;}?>"
           placeholder="school"><br><br>
</div>



<label class="control-label col-sm-3" for="inputA">department :</label>
<div class="controls col-md-7">
    <input name="dept" type="text" class="form-control" id="inputPassword"  value="<?php if(isset($dept)){ echo $dept;}?>"
           placeholder="deoartment"><br><br>
</div>


<label class="control-label col-sm-3" for="inputA">candidate_id :</label>
<div class="controls col-md-7">
    <input name="id" type="text" class="form-control" id="inputPassword"  value="<?php if(isset($c_id)){ echo $c_id;}?>"
           placeholder="choose candidate id"><br><br>
</div>



<label class="control-label col-sm-3" for="inputA">CGPA :</label>
<div class="controls col-md-7">
    <input name="cgpa" type="text" class="form-control" id="inputPassword"  value="<?php if(isset($cgpa)){ echo $cgpa;}?>"
           placeholder="cgpa"><br><br>
</div>



<label class="control-label col-sm-3" for="inputA">LEVEL :</label>
<div class="controls col-md-7">
    <select id="gender" name="level" type="text" class="contacttextform" onfocus="if (this.value == 'Please Select Your level') {this.value = '';}">
        <option value="" onFocus="" selected>please select your Level</option>
        <option value="200">200Level</option>
        <option value="300">300Level</option>
        <option value="400">400Level</option>
    </select><br><br>
</div>


<label class="control-label col-sm-3" for="inputA">position :</label>
<div class="controls col-md-7">
    <select id="gender" name="position" type="text" class="contacttextform" onfocus="if (this.value == 'Please Select Your Gender') {this.value = '';}">
        <option value="" onFocus="" selected>please select his position</option>
        <option value="president">president</option>
        <option value="vice_president">vice_president</option>
        <option value="secretary">secretary general</option>
        <option value="treasure">treasure</option>
        <option value="financial">financial secretary</option>



    </select><br><br>
</div>

