<?php
$conn_error = 'could not connect';

$mysql_db = 'hotel';
$host = 'localhost';
$user = 'root';
$pass = 'root';

if(mysql_connect($host,$user,$pass)) {
    if(mysql_select_db($mysql_db)){
    //echo 'connected';
    }
}
else{
    die($conn_error);
}
?>