<?php
include 'header.php';
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
    header('location: attempt.php');
    echo "You are already logged in...";
}
?>
<br><br><br>
<pre>

<style type="text/css"> 
#mydiv {
    position:absolute;
    top: 70%;
    left: 50%;
    width:30em;
    height:18em;
    margin-top: -9em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em; /*set to a negative number 1/2 of your width*/
    border: 1px solid #ccc;
    background-color: #ff9900;
    border: groove;
}

</style>
<br><br><br>
<div id="mydiv"><form action="attempt.php" method="POST"><br>User Name: <input type="text" name="name"><br><br>Password: &nbsp;<input type="password" name="pass"><br><br><input type="submit"value="submit"></form>
</div>