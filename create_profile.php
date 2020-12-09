<?php require 'includes/connect.php';
require 'includes/core.inc.php';
require_once("includes/header3.php");
$src = "";



if(loggedin()){
    header("location:index.php");
}

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

?>
<?php
if(isset($_FILES['userFile']['name']) && !empty($_FILES['userFile']['name'])){
   // echo "goooooooooood";
    $file_name = $_FILES["userFile"]["name"];
    $temp_name = $_FILES["userFile"]["tmp_name"];
    $imgtype = $_FILES["userFile"]["type"];
    $ext = getImageExtension($imgtype);
    $image_name = date("d-m-Y") . "-" . time() . $ext;
    $target_path = "uploads/voters/".$image_name;

    //global $target_path;
    //$_POST['target_path'] = $target_path;

    if(move_uploaded_file($temp_name,$target_path)){
        echo "image successfully uploaded";
    }else{
        echo "image upload failed";
    }
}else{
   // echo "pls choose a file";
   // echo "please select the image to be uploaded";



}// check if form is submitted
if (isset($_POST['first_name'])&& isset($_POST['middle_name'])&&isset($_POST['sur_name'])&&isset($_POST['username'])&&isset($_POST['age'])&&isset($_POST['gender'])&&isset($_POST['relationship'])&&isset($_POST['address'])&&isset($_POST['phone_number'])&&isset($_POST['email'])&&isset($_POST['nationality'])&&isset($_POST['state'])&&isset($_POST['lga'])&&isset($_POST['password'])&&isset($_POST['confirm_password'])) {

    $firstname = $_POST['first_name'];
    $middlename = $_POST['middle_name'];
    $surname = $_POST['sur_name'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $relationship = $_POST['relationship'];
    $address = $_POST['address'];
    $phone = $_POST['phone_number'];
    $email = $_POST['email'];
    $nationality = $_POST['nationality'];
    $state = $_POST['state'];
    $lga = $_POST['lga'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

   if (!empty($firstname) && !empty($middlename) && !empty($surname) && !empty($username) && !empty($age) && !empty($gender) &&   !empty($relationship)&&   !empty($address) &&!empty($phone)&&  !empty($email) &&  !empty($password) &&!empty($confirm_password) && !empty($lga) && !empty($state) && !empty($nationality)) {

           if ($password != $confirm_password) {
               echo 'password do not match';
           } else {
               //start registration processs

               $query = "SELECT `username` FROM `user_information` WHERE `username` = '$username'";
               $query_run = mysql_query($query);

               if (mysql_num_rows($query_run) == 1) {
                   echo 'The username ' . $username . ' already exist';

               } else {
                   $query = "INSERT INTO `user_information` VALUES ('','" . $firstname . "','" . $middlename . "','" . $surname . "','" . $username . "','" . $age . "','" . $gender . "','" . $relationship . "','" . $address . "','" . $phone . "','" . $email . "','" . $password . "','" . $nationality . "','" . $state . "','" . $lga . "','".$image_name."')";
                   if ($query_run = mysql_query($query)) {

                         if(isset($_POST['username'])&&isset($_POST['password'])){
                                $username = $_POST['username'];
                                $password = $_POST['password'];

                                if(!empty($username)&& !empty($password)){
                                     $query = "SELECT `id` FROM `user_information` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password)."' OR `email`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password)."'";
                                     if($query_run = mysql_query($query)) {
                                             $query_num_rows = mysql_num_rows($query_run);

                                             if($query_num_rows==0){
                                                        $invalid= 'invalid username/password combination.';
                                             }else if($query_num_rows==1){
                                             $user_id = mysql_result($query_run, 0,'id');
                                             $_SESSION['user_id']=$user_id;
                                                       if(isset($_SERVER['HTTP_REFERER'])&& !empty($_SERVER['HTTP_REFERER'])) {
                                                           header('location:index.php');
                                                      }else{
                                                               header('location:index.php');
                                                      }


                                             }
                                     }

                                     else{
                                      echo 'ivalid username';
                                      }
                                }
                         }

                   } else {
                       echo 'sorry, we couldn\'t register you at this time. try again later';
                   }
               }
           }
       }
   }else{
      // echo "please select image";
   }
?>

<div id="main">
<br/><br/><br/>
    <!-- Start H1 Title -->
    <div class="titlesnormal">
    
    	<h1>Register with e-election website: to make you eligible for upcoming election</h1>
        
        <span></span>
    
    </div>
    <!-- End H1 Title -->
    <!-- Start Main Body Wrap -->
    <div id="main-wrap">
        
        
        
        <!-- Start Full Width -->
        <div class="boxes-full">
        
            <div class="contacttitle">
            
                <h2>Personal Information</h2>
            
            </div>
            
        
        	<div class="boxes-padding fullpadding">
            
            <div id="contactwarning"></div>
            <div id="contactajax"></div>
            
            <form action="<?php echo $current_file;?>" method="post" name="ajaxcontactform" id="ajaxcontactform" enctype="multipart/form-data">
            
            
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



                <!-- End one 3rd and two 3rd Split Section -->
                <div class="clear"></div>
                <br/>
                
                
                <div class="contacttitle">
            
                <h2>Contact Information</h2>
            
            	</div>
                
                
                <div class="contacttextarea">
                	<fieldset>
                    <div class="col-md-3 form_text">Address :</div>
                        <div class="col-md-9">
                    	<textarea name="address" id="address" cols="5" rows="5" class="contacttextarea" required="" value="<?php if(isset($address)){ echo $address;} ?>" placeholder="Please Enter Your Address">Please Enter Your Address</textarea>
                        </div>
                    </fieldset>
                </div>
                
                
                </div>
                
                
                <div class="contacttextboxes">
                
                
                	<fieldset>
                    	<div class="col-md-6 form_text_left">phone number :</div>
                    
                	</fieldset>
                
                
                
                	
                    
                	<fieldset>
                    	<input id="phone_number" name="phone_number" type="text" class="contacttextform" placeholder="Please Insert Your Phone Number" value="<?php if(isset($phone)){ echo $phone; } ?>" required="" maxlength="15">
                    </fieldset>
                    
                    
                    
                    
                    <fieldset>
                    	<div class="col-md-6 form_text_left">email address :</div>
                    
                	</fieldset>
                    
                    
                    
                    
                    
                	<fieldset>
                    	<input id="email" name="email" type="text" class="contacttextform" required="" value="<?php if(isset($email)){ echo $email;} ?>" placeholder="Please Insert Your Email">
                    </fieldset>
                    
                    
                    
                   
                
                </div>
                
                
                
                
                
                 <div class="clear"></div>
                <br/>
                
                
                <div class="contacttitle">
            
                <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Originality</h2>
            
            	</div>
                
                
                 
                
                
                 
                 
                
                
                
                
                 <div class="contacttextboxes">
                
                	<!--<fieldset>
                		<div class="col-md-6 form_text_left">Priviledge:</div>
                    </fieldset>-->
                        <!--<div class="col-md-6">-->
                        <!--<fieldset>
                    	<select id="priviledge" name="priviledge" type="text" class="contacttextform" onfocus="if (this.value == 'Please Select Your Priviledge') {this.value = '';}">
                        <option value="" selected> Please Select Your Priviledge </option>
                        <option value="1"> admin </option>
                        <option value="2"> staff </option>
                        <option value="3"> user </option>
                        </select>-->
                        <!--</div>-->
                <!--</fieldset>-->
                
                
                
                	<fieldset>
                    	<div class="col-md-6 form_text_left">password :</div>
                    
                	</fieldset>
                
                
                	<!--<fieldset>
                    	<input id="password" name="password" type="password" class="contacttextform" onfocus="ValidatePassword(document.getElementById('password'),this);"value="Please Insert Your Password">
                    </fieldset>-->
                	
                    
                	<fieldset>
                    	<input id="password" name="password" type="password" class="contacttextform" onfocus="if (this.value == 'Please Insert Your Password') {this.value = '';}"value="Please Insert Your Password">
                    </fieldset>
                    
                    
                    
                     
                
                    <fieldset>
                    	<div class="col-md-6 form_text_left">confirm pass :</div>
                    
                	</fieldset>
                    
                   
                    
                    
                     
                
                	<fieldset>
                    	<input id="confirm_password" name="confirm_password" type="password" class="contacttextform" onfocus="if (this.value == 'Please Insert Your Password Again to be Confirmed') {this.value = '';}"value="Please Insert Your Password Again to be Confirmed">
                    </fieldset>
                     
               
                    <fieldset>
                    	<input name="send" type="submit" class="contactformbutton" value="Send">
                    </fieldset>
                    
                    
                    
                    
                   
                
                </div>
                
                
                
             
                <div class="contacttextarea">
                 
                 <fieldset>
                		<div class="col-md-3 form_text">Nationality:</div>
                        <div class="col-md-9">
                    	<input id="nick_name" name="nationality" type="text" class="contacttextform"required="" value="<?php if(isset($nationality)){ echo $nationality;} ?>" placeholder="Please Insert Your Nationality">
                        </div>
                </fieldset>
                </div>







            <div class="contacttextarea">

                <fieldset>
                    <div class="col-md-3 form_text">state of Origin:</div>
                    <div class="col-md-9">
                        <input id="nick_name" name="state" type="text" class="contacttextform" required="" value="<?php if(isset($state)){ echo $state;} ?>" placeholder="Please Insert Your state of Origin">
                    </div>
                </fieldset>
            </div>


            <div class="contacttextarea">

                <fieldset>
                    <div class="col-md-3 form_text">LGA of Origin:</div>
                    <div class="col-md-9">
                        <input id="nick_name" name="lga" type="text" class="contacttextform" required="" value="<?php if(isset($lga)){ echo $lga;} ?>" placeholder="Please Insert Your Local Goverment of Origin">
                    </div>
                </fieldset>
            </div>
                
                
                </div>
                
                
                
                
                
                
                
                
                
                
               
                
            </form>
            
            
            
            
            
            
            
            <span class="box-arrow"></span>
            
        </div>
        <!-- End Full Width -->
        
    </div>
    <!-- End Main Body Wrap -->

                
                	
<?php require_once("includes/footer.php");?>