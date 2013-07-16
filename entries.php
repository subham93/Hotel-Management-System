<?php
include 'conn.php';
include 'header.php';

if(isset($_POST['customer_name']) && !empty($_POST['customer_name'])){
        
$customer_name=$_POST['customer_name'];         //Assignment of entries into variables....
$room_type=$_POST['room_type'];

$query11 = "select Rent from room where Room_Type = '$room_type'";
$query_run11 = mysql_query($query11);
$rent = mysql_result($query_run11,0,'Rent');

if($room_type == 'std')                 //Assign Display names.....
$room_type1 = 'Standard Room';
if($room_type == 'del')
$room_type1 = 'Deluxe Room';
if($room_type == 'ex')
$room_type1 = 'Executive Room';
if($room_type == 'esuite')
$room_type1 = 'Executive Suite';
if($room_type == 'gesuite')
$room_type1 = 'Grand Executive Suite';
if($room_type == 'ksuite')
$room_type1 = 'King Suite';
$time = time();
$entry_time = date('h:i:s',$time+12600);

$query13 = "SELECT No_avail FROM  room WHERE  Room_Type = '$room_type' "; 
$query_run13 = mysql_query($query13);
$no_avail = mysql_result($query_run13,0,'No_avail');
$no_avail1 = $no_avail - 1;
if($no_avail == 0){
    echo "<h2>No Rooms Available in this Room Type. Please Go Back and select another room type.</h2>";
    die();
}
else{
$query12 = "UPDATE  room SET  No_avail = '$no_avail1' WHERE  Room_Type =  '$room_type'";
$query_run12 = mysql_query($query12);
}

if($room_type == 'std'){
cc: $room_no = rand()%10+100;
$query14 = "select * from customer where Room_no = '$room_no'";
$query_run14 = mysql_query($query14);
$rows1 = mysql_num_rows($query_run14);
if($rows1 > 0){
    goto cc;
}
else{}
}
if($room_type == 'del'){
dd: $room_no = rand()%10+200;
$query14 = "select * from customer where Room_no = '$room_no'";
$query_run14 = mysql_query($query14);
$rows1 = mysql_num_rows($query_run14);
if($rows1 > 0){
    goto dd;
}
else{}
}if($room_type == 'ex'){
ee: $room_no = rand()%10+300;
$query14 = "select * from customer where Room_no = '$room_no'";
$query_run14 = mysql_query($query14);
$rows1 = mysql_num_rows($query_run14);
if($rows1 > 0){
    goto ee;
}
else{}
}if($room_type == 'esuite'){
ff: $room_no = rand()%10+400;
$query14 = "select * from customer where Room_no = '$room_no'";
$query_run14 = mysql_query($query14);
$rows1 = mysql_num_rows($query_run14);
if($rows1 > 0){
    goto ff;
}
else{}
}if($room_type == 'gesuite'){
gg: $room_no = rand()%10+500;
$query14 = "select * from customer where Room_no = '$room_no'";
$query_run14 = mysql_query($query14);
$rows1 = mysql_num_rows($query_run14);
if($rows1 > 0){
    goto gg;
}
else{}
}if($room_type == 'ksuite'){
hh: $room_no = rand()%10+600;
$query14 = "select * from customer where Room_no = '$room_no'";
$query_run14 = mysql_query($query14);
$rows1 = mysql_num_rows($query_run14);
if($rows1 > 0){
    goto hh;
}
else{}
}

$query3 = "INSERT INTO `hotel`.`customer` (`Customer_id`, `Customer_Name`, `Room_Type`, `Room_no`, `Rent`,`Entry_Time`) VALUES ('', '$customer_name', '$room_type1', '$room_no' , '$rent' ,'$entry_time')";
if($query_run = mysql_query($query3)){
    if(mysql_num_rows==NULL){
        echo '<h2>No Results Found</h2>';
    }
    else{
    echo "<h2>Customer Successfully checked in.</h2>";
    }
}
}
else{
    
            echo '<br>.<br>.<br>'."<h2>Please Go Back and complete all the fields...</h2>";
            }

?>

