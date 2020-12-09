<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 14/10/2015
 * Time: 12:33
 */
require_once("includes/loggedin.php");
$query = "SELECT `id` FROM `voters` WHERE `id` = '".$_SESSION['user_id']."' ";
$query_run = mysql_query($query);
if (mysql_num_rows($query_run) == 1) {
   header ("location:verified.php");

}else{
    header ("location:participate.php");
}

?>