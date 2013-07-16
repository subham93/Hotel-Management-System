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
            th {color:rgb(160,25,0);font-size:200%}
            td {color:black;font-size:150%}
        </style>
    </head>
    <body>
        <table border="3" cellpadding="10">
            <caption style="font-size:150%"><u><b>Department</caption>
            <tr>
                <th>Department No.</th>
                <th>Department Name</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Housekeeping</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Food & Beverage</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Sales & Marketing</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Accounting</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Security</td>
            </tr><tr>
                <td>6</td>
                <td>Front Office</td>
            </tr>
            
        </table>
    </body>
</html>