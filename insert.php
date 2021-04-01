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

$Name = $_POST['name'];
$Blood = $_POST['blood'];
$City= $_POST['city'];
$Phone= $_POST['phone'];
$sql = "INSERT INTO person (Name,Blood,City,Phone) VALUES ('$Name','$Blood','$City','$Phone')";


if(!mysqli_query($con,$sql))
{
    echo 'Not Inserted';
}
 else {
    include_once "deleteDonor.php";
 }
 
 

header("Refresh:5; url= newDonor.php");

  

?>