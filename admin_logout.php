<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 18/11/2015
 * Time: 10:20
 */

require_once 'includes/connect.php';
require_once 'includes/admin_core.php';
echo $http_referer;
session_destroy();
header('location:'.$http_referer);

?>