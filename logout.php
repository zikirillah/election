<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 25/09/2015
 * Time: 13:14
 */

require_once 'includes/connect.php';
require_once 'includes/core.inc.php';
echo $http_referer;
session_destroy();
header('location:'.$http_referer);

?>