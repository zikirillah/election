<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 18/11/2015
 * Time: 09:37
 */

ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

if(isset($_SERVER['HTTP_REFERER'])&& !empty($_SERVER['HTTP_REFERER']))    {
    $http_referer = $_SERVER['HTTP_REFERER'];
}

function loggedin(){
    if(isset($_SESSION['admin_id'])&& !empty($_SESSION['admin_id'])){
        return true;
    } else{
        return false;
    }
}

function getuserfield($field) {
    $query = "SELECT `$field` FROM `admin` WHERE id='".$_SESSION['admin_id']."'";
    if($query_run = mysql_query($query)){
        if ($query_result = mysql_result($query_run, 0, $field)){
            return $query_result;
        }

    }
}

?>