<?php
include 'conn.php';
include 'header.php';
if(!(isset($_SESSION['username']) && !empty($_SESSION['username']))){
    header('Refresh: 5; url=login.php');
    echo "You have not logged in... You will be redirected shortly";
    die();
}
?>
<pre>                                                                                                       <a href="logout.php" style="text-decoration: none;font-size: 120% ">logout</a></pre>
<h2>Enter the customer name for details </h2>

<form action="search.php" method="POST">
    <input type="text" name="search">
    <input type="submit" value="search">
</form>
<?php
if(isset($_POST['search'])){
    $name = $_POST['search'];
        
$query5 = "SELECT * FROM  customer WHERE  Customer_Name = '$name' "; 
$query_run = mysql_query($query5);

   if (mysql_num_rows($query_run) == NULL){
        echo '<h4>No Customer Found</h4>';
        die();
    }
    else{
       while($query_row = mysql_fetch_assoc($query_run)){
        $cust_name = $query_row['Customer_Name'];
        $room_type = $query_row['Room_Type'];
        $room_no = $query_row['Room_no'];
        $rent = $query_row['Rent'];
        //$name = $query_row['Name'];
        echo "<h4>Name: ".$cust_name."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Room Type: ".$room_type."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Room no.: ".$room_no."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Rent: ".$rent.'.</h4><br>';
       }
        //echo mysql_result($query_run,0,'Customer_Name');
        }
}
 
?>
