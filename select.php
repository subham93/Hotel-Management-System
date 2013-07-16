<?php
require 'conn.php';
$query = "select * from customer";
$query6 = "select * from i";
ob_start();
session_start();

if($query_run = mysql_query($query)){
    if(mysql_num_rows==NULL){
        die();
    }
    else{
}
}
else{
    echo 'Query failed';
}
if($query_run1 = mysql_query($query6)){
    if(mysql_num_rows==NULL){
        die();
    }
    
}
else{
    echo 'Query failed';
}

/*if($query_run = mysql_query($query2)){
    if(mysql_num_rows==NULL){
        die();
    }
    else{
        while($query_row = mysql_fetch_assoc($query_run)){
        $cust_name = $query_row['Customer_Name'];
        //$name = $query_row['Name'];
        echo '<br>'.$cust_name;
        }
    }
}

else{
    echo 'Query failed';
}*/
?>