<?php
include 'header.php';
include 'conn.php';
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Customer Details.
    </title>
</head>
<body>
    
    <pre>
    <h1>Kindly fill in your details: </h1>
    <?php
        $name=$_POST['customer_name'];
        
     // $rent1=500;  
    ?>
</body>
</html>
<pre>
<form action ="entries.php" method="POST" >
            <fieldset>
            <legend>Customer information:</legend>
<p style="font-size:200%">            Name:       <input type="text" name="customer_name">
            Room Type:  <select name="room_type">
                        <option value="std">Standard Room</option>
                        <option value="del">Deluxe Room</option>
                        <option value="ex">Executive Room</option>
                        <option value="esuite">Executive Suite</option>
                        <option value="gesuite">Grand Executive Suite</option>
                        <option value="ksuite">King Suite</option>
                        
                     </select><br>
        <input type="submit" value="submit"> 
            </fieldset>
        </form>
</pre>
