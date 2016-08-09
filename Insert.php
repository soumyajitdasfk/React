<?php

$fname=htmlspecialchars($_GET["firstname"]);
$lname=htmlspecialchars($_GET["lastname"]);
$email=htmlspecialchars($_GET["emailaddress"]);
$password=htmlspecialchars($_GET["inputpassword"]);


$user="root";
$host="localhost";
$sql=mysqli_connect($host,$user);

mysqli_select_db($sql,"TODOAPP");

$result=mysqli_query($sql,"SELECT * FROM User WHERE Email='$email'");
if (mysqli_num_rows($result)>0){

    phpAlert("Email Id already exists. Please try again");
    header("refresh:1;url=Signup.html");
  }
  else {

    mysqli_query($sql,"INSERT INTO User VALUES ('$fname','$lname','$email','$password')");
    phpAlert("Welcome to your personalized space for your task");
    header("refresh:2;url=Signin.html");
  }


function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

?>
