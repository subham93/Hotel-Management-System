<?php
include 'header.php';
include 'conn.php';

$query15 = "select No_avail from room order by rent";
$query_run15 = mysql_query($query15);
?>
<html>
    <head>
        <title>
            Room Rent Info
        </title>
        <style type="text/css">
            th {color:rgb(160,25,0);font-size:200%;background-color: #202013;}
            td {color:black;font-size:150%;}
        </style>
    </head>
    <body>
        <table border="0" cellpadding="10">
            <caption style="font-size:150%"><u><b>Room Tariff</caption>
            <tr>
                <th>sl no.</th>
                <th>Room Type</th>
                <th>Total Rooms</th>
                <th>No. of Available Rooms</th>
                <th>Room Rent(In <img src="inr.png"></img>)</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Standard Room</td>
                <td>10</td>
                <td><?php echo mysql_result($query_run15,0,'No_avail');?></td>
                <td>2000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Deluxe Room</td>
                <td>10</td>
                <td><?php echo mysql_result($query_run15,1,'No_avail');?></td>
                <td>3000</td>
            </tr><tr>
                <td>3</td>
                <td>Executive Room</td>
                <td>10</td>
                <td><?php echo mysql_result($query_run15,2,'No_avail');?></td>
                <td>5000</td>
            </tr><tr>
                <td>4</td>
                <td>Executive Suite</td>
                <td>10</td>
                <td><?php echo mysql_result($query_run15,3,'No_avail');?></td>
                <td>7000</td>
            </tr><tr>
                <td>5</td>
                <td>Grand Executive Suite</td>
                <td>10</td>
                <td><?php echo mysql_result($query_run15,4,'No_avail');?></td>
                <td>10000</td>
            </tr><tr>
                <td>6</td>
                <td>King Suite</td>
                <td>10</td>
                <td><?php echo mysql_result($query_run15,5,'No_avail');?></td>
                <td>15000</td>
            </tr>
            
        </table>
    </body>
</html>