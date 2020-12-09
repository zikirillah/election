<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 18/11/2015
 * Time: 09:52
 */
require 'includes/connect.php';
require 'includes/admin_core.php';

if(loggedin()){
    $name = getuserfield('name');
    $username = getuserfield('username');
}else{
    header('location: admin_login.php');
}

