<?php
session_start();
error_reporting(0);
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$number=$_POST['number'];
$conn= new mysqli('localhost:3306','root','','madhuri');
if($conn->connect_error)
{
    echo "Connection failed";
    die("connection failed:" .$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into register(firstname,lastname,gender,email,password,number)values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$firstname,$lastname,$gender,$email,$password,$number);
    $execval=$stmt->execute();
   echo $execval;
   echo "registration successfully";
    $stmt->close();
    $stmt->close();
}
?>









