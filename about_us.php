<!DOCTYPE html>
<html>
<head>
    <title>
        About us...
    </title>
</head>
<body>
    <?php
        //include 'header.php';
    if($i!=0){
        
}
else{
    $i=0;
}
 echo $i;
$i=$i+1;
echo $i;
    ?>
    <p style="font-family:times;font-size:20px;color: blue;">
        We are one of the most reputed hotels in india.
    </p>
    <br>
        <a href="contact.php" /*style="color:blue;text-decoration:none;"*/ target="_blank";>Contact us</a>
</body>
</html>
<form action="about_us.php" method="POST">
    <input type="submit" value="Next">
</form>