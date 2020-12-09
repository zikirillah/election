<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 29/11/2015
 * Time: 10:31
 */

require 'includes/admin_loggedin.php';
require_once('includes/header2.php');


if(isset($_POST['name'])&& isset($_POST['username'])&& isset($_POST['password'])){
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];


if(!empty($name) &&!empty($username) &&!empty($password)){
    $query = "SELECT `username` FROM `admin` WHERE `username` = '$username'";
    $query_run = mysql_query($query);

    if (mysql_num_rows($query_run) == 1) {
        echo '<script type="text/javascript">inusername();</script>';
    }
    else{
         $query = "INSERT INTO `admin` VALUES('','" . $name . "','" . $username . "','" . $password . "')";
        if ($query_run = mysql_query($query)) {
            echo '<script type="text/javascript">complete();</script>';

        }
    }
}

}
function delete(){
    echo 'done';
}

?>

<div id="main-wrap" xmlns="http://www.w3.org/1999/html">



    <!-- Start Full Width -->
    <div class="boxes-full">
        <fieldset>
            <legend><h2>Admin Registration</h2></legend>

<form action="admin_register.php" method="post">
                <label class="control-label col-sm-3" for="inputA">Name :</label>
                <div class="controls col-md-7">
                    <input name="name" type="text" class="form-control" id="inputPassword"  value="" placeholder="Fullname"><br><br>
                </div>



                <label class="control-label col-sm-3" for="inputA">Username :</label>
                <div class="controls col-md-7">
                    <input name="username" type="text" class="form-control" id="inputPassword"  value=""
                           placeholder="Username"><br><br>
                </div>



                <label class="control-label col-sm-3" for="inputA">Password :</label>
                <div class="controls col-md-7">
                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password"><br>
                </div>


                <div class="col-md-7 form_text">


                    <input type="submit" class="contactformbutton" value="submit">
                   <br>
                </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>





    </form>
<font color="black" size="5px">
    <div class="splitnone">

            <?php

                /** fetching candidates from the database to generate a ballot paper*/
                $query = "SELECT `name` FROM `admin`";
                $query_run = mysql_query($query);
                $numberRow = mysql_num_rows($query_run);

                $count = mysql_numrows($query_run);
                $i=0;
$x=1;

                    while ($i<$count) {
                        $name = mysql_result($query_run, $i, 'name');
                        echo "&nbsp;&nbsp;     ".$x.":&nbsp;&nbsp;   " . $name;
                        echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type='button' name='edit' value='edit' onclick='.edit().'> &nbsp;|&nbsp; <input type='button' name='delete' value='delete'><br><br>";
                        $i++;
                        $x++;
                    }
?>

</font>
            </div>

        </fieldset>


        </div>
</div>