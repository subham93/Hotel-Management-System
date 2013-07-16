<?php
include 'conn.php';

$query5 = "SELECT * FROM  `customer` WHERE  `Customer_Name` = '%$cust_name%'";
if($query_run = mysql_query($query5)){
    if(mysql_num_rows==NULL){
        echo 'No Rows Selected';
        die();
    }
    else{
       
        }
    }


else{
    echo 'QQuery failed';
}
?>