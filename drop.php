<?php

$con = mysqli_connect('localhost','root','','test');
 if (!$con)
 {
     echo 'Not Connected To Server';
 }

if(!mysqli_select_db($con,'epiz_23015840_test'))
{
    echo 'Database Not Connected';
}

$ID= $_POST['id'];


$sql = "DELETE FROM person WHERE ID = $ID";


if(!mysqli_query($con,$sql))
{
    echo 'Not Inserted';
}
 else {
    include_once "deleteDonor.php";
 }
 
 

header("Refresh:5; url= search3.php");

  

?>