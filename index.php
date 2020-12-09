<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 18/04/2015
 * Time: 06:58
 */
require 'includes/connect.php';
require 'includes/core.inc.php';

if(loggedin()){

    header('location: home.php');

}else{

    include 'login.php';
}


?>
