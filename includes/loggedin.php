<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 25/09/2015
 * Time: 12:54
 */
require 'connect.php';
require 'core.inc.php';

if(loggedin()){
    $firstname = getuserfield('first_name');
    $middlename = getuserfield('middle_name');
    $lastname = getuserfield('sur_name');
    $email = getuserfield('email');
    $username = getuserfield('username');
    $password = getuserfield('password');

    $query = "SELECT `id` FROM `voters` WHERE `id` = '".$_SESSION['user_id']."' ";
    $query_run = mysql_query($query);
    if (mysql_num_rows($query_run) == 1) {
        function voterfield($field)
        {
            $query = "SELECT `$field` FROM `voters` WHERE id='" . $_SESSION['user_id'] . "'";
            if ($query_run = mysql_query($query)) {
                if ($query_result = mysql_result($query_run, 0, $field)) {
                    return $query_result;
                }

            }
        }

        $voter_name = voterfield('name');
        $voter_school = voterfield('school');
        $voter_department = voterfield('department');
        $voter_level = voterfield('level');
        $voter_regno = voterfield('regno');
        $voter_id = voterfield('voter_number');

        // echo $voter_department.$voter_id.$voter_level.$voter_name.$voter_regno.$voter_school;

    }
    //include 'home.php';

}else{
    header('location:index.php');

    die();
}



?>

