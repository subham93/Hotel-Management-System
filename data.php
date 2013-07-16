<?php
//include 'entries.php';
include 'select.php';
if(!(isset($_SESSION['username']) && !empty($_SESSION['username']))){
    include 'header.php';
    header('Refresh: 5; url=login.php');
    echo "You have not logged in... You will be redirected shortly...";
    die();
}
$query_run1 = mysql_query($query6);
$query_run = mysql_query($query);
$rows = mysql_num_rows($query_run);
$i=mysql_result($query_run1,0,'vari');

?>
<html>
    <head>
        <title>
            Customer Details
        </title>
         <style type="text/css">
            th {color:red;font-size:160%}
            td {font-size:120%}
        </style>
    </head>
    <body style="background: url('HOTEL222.jpg');"><h3><a href="home.php" style="color: white">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php" style="color: white">logout</a></h3>
        <table border="0" cellpadding="12" cellspacing="0" >
            <caption style="font-size:150%"><u><b>Customer Details</caption>
            <pre>
            <?php
            $time = time();
            echo "<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo "Date:".date('d/m/Y',$time)."<br></h3>";
            echo "<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo "Time:".date('h:i:s',$time+12600)."</h3>";
            ?>
            <tr>
                <th></th>
                <th>sl no.</th>
                <th>Customer Name</th>
                <th>Room Type</th>
                <th>Room Number</th>
                <th>Rent(In <img src="inr.png"></img>)</th>
                <th>Check-in Time</th>
            </tr>
            <?php
            if($rows==0+$i*10){
            $query8 = "UPDATE i SET vari =  0";
            $query_run2 = mysql_query($query8);
            die();}
            ?>
            <tr>
                <td></td>
                <td>1</td>
                <td><?php echo mysql_result($query_run,0+$i*10,'Customer_Name');?></td>
                <td><?php echo mysql_result($query_run,0+$i*10,'Room_Type');?></td>
                <td><?php echo mysql_result($query_run,0+$i*10,'Room_no'); ?></td>
                <td><?php echo mysql_result($query_run,0+$i*10,'Rent'); ?></td>
                <td><?php echo mysql_result($query_run,0+$i*10,'Entry_Time'); ?></td>
            </tr>
            <?php
            if($rows==1+$i*10){
            $query8 = "UPDATE i SET vari =  0";
            $query_run2 = mysql_query($query8);
            die(); }
            ?>
            <tr>
                <td></td>
                <td>2</td>
                <td><?php {echo mysql_result($query_run,1+$i*10,'Customer_Name');} ?></td>
                <td><?php {echo mysql_result($query_run,1+$i*10,'Room_Type');}?></td>
                <td><?php {echo mysql_result($query_run,1+$i*10,'Room_no');} ?></td>
                <td><?php {echo mysql_result($query_run,1+$i*10,'Rent');} ?></td>
                <td><?php {echo mysql_result($query_run,1+$i*10,'Entry_Time');} ?></td>
            </tr>
            <?php
            if($rows==2+$i*10){
            $query8 = "UPDATE i SET vari =  0";
            $query_run2 = mysql_query($query8);
            die(); }
            ?>

            <tr>
                <td></td>
                <td>3</td>
                <td><?php {echo mysql_result($query_run,2+$i*10,'Customer_Name');} ?></td>
                <td><?php {echo mysql_result($query_run,2+$i*10,'Room_Type');}?></td>
                <td><?php {echo mysql_result($query_run,2+$i*10,'Room_no');} ?></td>
                <td><?php {echo mysql_result($query_run,2+$i*10,'Rent');} ?></td>
                <td><?php {echo mysql_result($query_run,2+$i*10,'Entry_Time');} ?></td>
            </tr>
                        <?php
            if($rows==3+$i*10){
            $query8 = "UPDATE i SET vari =  0";
            $query_run2 = mysql_query($query8);
            die(); }
            ?>

            <tr>
                <td></td>
                <td>4</td>
                <td><?php {echo mysql_result($query_run,3+$i*10,'Customer_Name');} ?></td>
                <td><?php {echo mysql_result($query_run,3+$i*10,'Room_Type');}?></td>
                <td><?php {echo mysql_result($query_run,3+$i*10,'Room_no');} ?></td>
                <td><?php {echo mysql_result($query_run,3+$i*10,'Rent');} ?></td>
                <td><?php {echo mysql_result($query_run,3+$i*10,'Entry_Time');} ?></td>
            </tr>
                        <?php
            if($rows==4+$i*10){
            $query8 = "UPDATE i SET vari =  0";
            $query_run2 = mysql_query($query8);
            die(); }
            ?>

            <tr>
                <td></td>
                <td>5</td>
                <td><?php {echo mysql_result($query_run,4+$i*10,'Customer_Name');} ?></td>
                <td><?php {echo mysql_result($query_run,4+$i*10,'Room_Type');}?></td>
                <td><?php {echo mysql_result($query_run,4+$i*10,'Room_no');} ?></td>
                <td><?php {echo mysql_result($query_run,4+$i*10,'Rent');} ?></td>
                <td><?php {echo mysql_result($query_run,4+$i*10,'Entry_Time');} ?></td>
            </tr>
                        <?php
            if($rows==5+$i*10){
            $query8 = "UPDATE i SET vari =  0";
            $query_run2 = mysql_query($query8);
            die(); }
            ?>

            <tr>
                <td></td>
                <td>6</td>
                <td><?php {echo mysql_result($query_run,5+$i*10,'Customer_Name');} ?></td>
                <td><?php {echo mysql_result($query_run,5+$i*10,'Room_Type');}?></td>
                <td><?php {echo mysql_result($query_run,5+$i*10,'Room_no');} ?></td>
                <td><?php {echo mysql_result($query_run,5+$i*10,'Rent');} ?></td>
                <td><?php {echo mysql_result($query_run,5+$i*10,'Entry_Time');} ?></td>
            </tr>
                        <?php
            if($rows==6+$i*10){
            $query8 = "UPDATE i SET vari =  0";
            $query_run2 = mysql_query($query8);
            die(); }
            ?>

            <tr>
                <td></td>
                <td>7</td>
                <td><?php {echo mysql_result($query_run,6+$i*10,'Customer_Name');} ?></td>
                <td><?php {echo mysql_result($query_run,6+$i*10,'Room_Type');}?></td>
                <td><?php {echo mysql_result($query_run,6+$i*10,'Room_no');} ?></td>
                <td><?php {echo mysql_result($query_run,6+$i*10,'Rent');} ?></td>
                <td><?php {echo mysql_result($query_run,6+$i*10,'Entry_Time');} ?></td>
            </tr>
                        <?php
            if($rows==7+$i*10){
            $query8 = "UPDATE i SET vari =  0";
            $query_run2 = mysql_query($query8);
            die(); }
            ?>

            <tr>
                <td></td>
                <td>8</td>
                <td><?php {echo mysql_result($query_run,7+$i*10,'Customer_Name');} ?></td>
                <td><?php {echo mysql_result($query_run,7+$i*10,'Room_Type');}?></td>
                <td><?php {echo mysql_result($query_run,7+$i*10,'Room_no');} ?></td>
                <td><?php {echo mysql_result($query_run,7+$i*10,'Rent');} ?></td>
                <td><?php {echo mysql_result($query_run,7+$i*10,'Entry_Time');} ?></td>
            </tr>
                        <?php
            if($rows==8+$i*10){
            $query8 = "UPDATE i SET vari =  0";
            $query_run2 = mysql_query($query8);
            die(); }
            ?>

            <tr>
                <td></td>
                <td>9</td>
                <td><?php {echo mysql_result($query_run,8+$i*10,'Customer_Name');} ?></td>
                <td><?php {echo mysql_result($query_run,8+$i*10,'Room_Type');}?></td>
                <td><?php {echo mysql_result($query_run,8+$i*10,'Room_no');} ?></td>
                <td><?php {echo mysql_result($query_run,8+$i*10,'Rent');} ?></td>
                <td><?php {echo mysql_result($query_run,8+$i*10,'Entry_Time');} ?></td>
            </tr>
                        <?php
            if($rows==9+$i*10){
            $query8 = "UPDATE i SET vari =  0";
            $query_run2 = mysql_query($query8);
            die(); }
            ?>

            <tr>
                <td></td>
                <td>10</td>
                <td><?php {echo mysql_result($query_run,9+$i*10,'Customer_Name');} ?></td>
                <td><?php {echo mysql_result($query_run,9+$i*10,'Room_Type');}?></td>
                <td><?php {echo mysql_result($query_run,9+$i*10,'Room_no');} ?></td>
                <td><?php {echo mysql_result($query_run,9+$i*10,'Rent');} ?></td>
                <td><?php {echo mysql_result($query_run,9+$i*10,'Entry_Time');} ?></td>
            </tr>
            <?php
            if($rows==10+$i*10){
            $query8 = "UPDATE i SET vari =  0";
            $query_run2 = mysql_query($query8);
            die(); }
            ?>
        </table>
        </style>
        
            <?php
            if($rows>10*i){
            $query7 = "UPDATE i SET vari =  $i+1";
            $query_run2 = mysql_query($query7);
            }
            else{
            $query8 = "UPDATE i SET vari =  0";
            $query_run2 = mysql_query($query8);
            die();
            }
            ?>
        <form action="data.php" method="POST">
            <input type="submit" value="Next">
        </form>
        
        </pre>
    </body>
</html>


<?php
/*
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
*/
?> 

