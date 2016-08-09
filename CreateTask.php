<?php

echo "InAPP";

$taskTitle=htmlspecialchars($_GET["TaskTitle"]);
$taskDesc=htmlspecialchars($_GET["TaskDesc"]);
//$priority=htmlspecialchars($_GET["Priority"]);



$user="root";
$host="localhost";
$sql=mysqli_connect($host,$user);

mysqli_select_db($sql,"TODOAPP");

mysqli_query($sql,"INSERT INTO Task (Task Title,Task Description) VALUES ('$taskTitle','$taskDesc')");


    phpAlert("Task has been added to your list");
    /*header("refresh:1;url=TaskList.html");*/



function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

?>
