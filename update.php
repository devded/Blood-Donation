<?php

$con = mysqli_connect('sql206.epizy.com','epiz_23015840','FtwlCAOi0Q');
 if (!$con)
 {
     echo 'Not Connected To Server';
 }

if(!mysqli_select_db($con,'epiz_23015840_test'))
{
    echo 'Database Not Connected';
}

$ID= $_POST['id'];
$Name = $_POST['name'];
$Blood = $_POST['blood'];
$City= $_POST['city'];
$Phone= $_POST['phone'];

$sql = "UPDATE person SET Name='$Name', Blood= '$Blood', City='$City', Phone='$Phone' WHERE ID = $ID";


if(!mysqli_query($con,$sql))
{
    echo 'Not Inserted';
}
 else {
    include_once "editDonor.php";
 }
 
 

header("Refresh:5; url= editDonor.php");

  

?>