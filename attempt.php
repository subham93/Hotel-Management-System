<?php
include 'header.php';
include 'conn.php';
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
    goto xx;
}
$staff_name = $_POST['name'];        
$pass = $_POST['pass'];
if(isset($staff_name) && !empty($staff_name) && isset($staff_name) && !empty($staff_name)){
    $query23 = "select * from login";
    $query_run23 = mysql_query($query23);
    $username = mysql_result($query_run23,0,'user_name');
    $password = mysql_result($query_run23,0,'pass');
    if($username==$staff_name && $password==$pass){
       $_SESSION['username'] = $username;

    }
    else{
        echo "Incorrect User Name or Password. Please Go Back and fill in properly";
        die();
    }

}
else{
 echo "Incorrect User Name or Password. Please Go Back and fill in properly";
        die();   
}xx:
?>
<pre>                                                                                                       <a href="logout.php" style="text-decoration: none;font-size: 120% ">logout</a></pre><br><br><br>
<pre>

<object width="1000" height="200"
classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"

<param name="SRC" value="logged.swf">
<embed src="logged.swf" width="300" height="200"></embed>
</object>