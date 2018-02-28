<?php
$con = mysqli_connect('localhost','root','');
if(!$con){
    echo "Could not Establish connection !!! Please Reload";
}
if(!mysqli_select_db($con,'myprofile')){
    echo "Could not Establish connection !!! Please Reload";
}

$name=mysqli_real_escape_string($con, $_POST['name']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$feed=mysqli_real_escape_string($con, $_POST['feed']);
echo $feed;
$sql = "INSERT INTO feedback ( name, email, feedback) VALUES ('$name','$email','$feed');";
echo $sql;
if(!mysqli_query($con, $sql))
{
    echo "data not inserted";
}
else echo "Data Inserted";
header("Location: index.html");
?>