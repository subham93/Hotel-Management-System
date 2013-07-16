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
<h2>Enter the Staff Name to know his/her details </h2>

<form action="sel_dep.php" method="POST">
    <input type="text" name="search1">
    <input type="submit" value="search">
</form>
<?php
if(isset($_POST['search1'])){
    $name11 = $_POST['search1'];
$query21 = "SELECT s.*,d.Dep_Name FROM  staff_details s,department d WHERE d.Dep_no=s.Dep_no and s.Name = '$name11' "; 
$query_run21 = mysql_query($query21);

   if (mysql_num_rows($query_run21) == NULL){
        echo 'No Staff of that name found';
        die();
    }
    else{
       while($query_row = mysql_fetch_assoc($query_run21)){
        $id = $query_row['Staff_id'];
        $name12 = $query_row['Name'];
        $no = $query_row['Dep_no'];
        $salary = $query_row['Salary'];
        $address = $query_row['Address'];
        $sex = $query_row['Sex'];
        $dep_name = $query_row['Dep_Name'];
        //$name = $query_row['Name'];
        echo "<h4>Staff id: ".$id."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Name: ".$name12."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Department no.: ".$no."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Salary: ".$salary."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Address: ".$address."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Sex: ".$sex."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Department Name: ".$dep_name."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>".'<br>';
       }
        //echo mysql_result($query_run,0,'Customer_Name');
        }
}
 
?>
