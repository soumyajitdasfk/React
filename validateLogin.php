<?php

$email=htmlspecialchars($_GET["emailaddress"]);
$password=htmlspecialchars($_GET["inputpassword"]);

$user="root";
$host="localhost";
$sql=mysqli_connect($host,$user);

mysqli_select_db($sql,"TODOAPP");

$result=mysqli_query($sql,"SELECT * FROM User WHERE Email='$email' AND Password='$password'");

if (mysqli_num_rows($result)>0){

  phpAlert("Redirecting to your personal Dashboard");
  header("refresh:1;url=index.html");
  }
  else {
    phpAlert("Sorry,incorrect Email Id or Password. Kindly re-enter!");
    header("refresh:1;url=Signin.html");
}


function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

?>
