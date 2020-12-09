<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 24/09/2015
 * Time: 17:23
 */
$conn_error = 'could not connect';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'election';

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db)){
    die($conn_erorr);
}else{

}



?>