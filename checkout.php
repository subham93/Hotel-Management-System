<?php
include 'conn.php';
include 'header.php';
if(!(isset($_SESSION['username']) && !empty($_SESSION['username']))){
    header('Refresh: 5; url=login.php');
    echo "You have not logged in... You will be redirected shortly";
    die();
}
$name1 = $_POST['name'];
$room_no1 = $_POST['room_no'];

echo "<h2>Enter the customer name and Room no. for check out: </h2> ";
if(isset($_POST['name']) && isset($_POST['room_no']) && !empty($_POST['name']) && !empty($_POST['room_no'])){
$query9 = "DELETE FROM customer WHERE Customer_Name = '$name1' and Room_no = '$room_no1'";
$query10 = "select * from customer";
$query_run10 = mysql_query($query10);
$query_run9 = mysql_query($query9);
$query_run11 = mysql_query($query10);
   if (mysql_num_rows($query_run10) != mysql_num_rows($query_run11)){

    echo "<h3>Customer Successfuly checked out</h3>";
    
    
    if(($room_no1 >99) && ($room_no1 < 111)){ $room_type2 = 'std'; $query17 = "SELECT No_avail FROM  room WHERE  Room_Type = '$room_type2' "; 
    $query_run17 = mysql_query($query17); $no_avail3 = mysql_result($query_run17,0,'No_avail');
    $no_avail4 = $no_avail3+1;}
    if(($room_no1 >199) && ($room_no1 < 211)){ $room_type2 = 'del'; $query18 = "SELECT No_avail FROM  room WHERE  Room_Type = '$room_type2' "; 
    $query_run17 = mysql_query($query18);  $no_avail5 = mysql_result($query_run17,0,'No_avail');
    $no_avail4 = $no_avail5+1;}
    if(($room_no1 >299) && ($room_no1 < 311)){ $room_type2 = 'ex'; $query19 = "SELECT No_avail FROM  room WHERE  Room_Type = '$room_type2' "; 
    $query_run17 = mysql_query($query19); $no_avail6 = mysql_result($query_run17,0,'No_avail');
    $no_avail4 = $no_avail6+1;}
    if(($room_no1 >399) && ($room_no1 < 411)){ $room_type2 = 'esuite'; $query20 = "SELECT No_avail FROM  room WHERE  Room_Type = '$room_type2' "; 
    $query_run17 = mysql_query($query20); $no_avail7 = mysql_result($query_run17,0,'No_avail');
    $no_avail4 = $no_avail7+1;}
    if(($room_no1 >499) && ($room_no1 < 511)){ $room_type2 = 'gesuite'; $query21 = "SELECT No_avail FROM  room WHERE  Room_Type = '$room_type2' "; 
    $query_run17 = mysql_query($query21); $no_avail8 = mysql_result($query_run17,0,'No_avail');
    $no_avail4 = $no_avail8+1;}
    if(($room_no1 >599) && ($room_no1 < 611)){ $room_type2 = 'ksuite'; $query22 = "SELECT No_avail FROM  room WHERE  Room_Type = '$room_type2' "; 
    $query_run17 = mysql_query($query22); $no_avail9 = mysql_result($query_run17,0,'No_avail');
    $no_avail4 = $no_avail9+1;}
    $query16 = "UPDATE  room SET  No_avail = '$no_avail4' WHERE  Room_Type =  '$room_type2'";
    $query_run16 = mysql_query($query16);

}
else{
   //echo mysql_num_rows($query_run10);
   //echo mysql_num_rows($query_run11);
    echo "<h4>Enter Proper combination</h4>";
}
}
else{
    echo "<h4><br>Please Enter both the fields</h4>";
}
?>
<pre>                                                                                                       <a href="logout.php" style="text-decoration: none;font-size: 120% ">logout</a></pre>
<pre>
    <fieldset>
            <legend>Customer information:</legend>
<form action="checkout.php" method="POST">
            <p style="font-size: large">    Customer Name: <input type="text" name="name"><br>
    Room No.:      <input type="text" name="room_no">
    
    <input type="submit" value="check out">
        </style>
</form>
    </fieldset>
</pre>
