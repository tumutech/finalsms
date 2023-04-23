<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="sch";
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("Cannot Connect");
?>
