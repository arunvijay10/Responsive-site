<?php

$con =mysqli_connect("localhost",'root');

if($con)
{
    echo"connection is established";
}
else
{
    echo"connection is not established";
}
mysqli_select_db($con,' techhack');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$cemail= $_POST['cemail'];
$phone= $_POST['phone'];
$address= $_POST['address'];
$city = $_POST['city'];
$pwd = $_POST['pwd'];
$cpwd = $_POST['cpwd'];

$query= "insert into userinfodata (fname,lname,email,cemail,phone,address,city,pwd,cpwd) values('$fname','$lname','$email','$cemail','$phone','$address','$city','$pwd','$cpwd')";

mysqli_query($con,$query);

echo "$query";
?>