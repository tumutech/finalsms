<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
if($_POST['submit']){
    $id = $_POST['id'];
    $sql = "DELETE FROM teachers WHERE id = '$id';";
    $success = mysqli_query($conn,$sql );
    $sql = "DELETE FROM users WHERE userid = '$id';";
    $success = mysqli_query( $conn,$sql );
    if(!$success) {
        die('Could not Delete data: '.mysql_error());
    }
    unlink('../images/'.$id.'.jpg');
    echo "Delete data successfully\n";
    header("Location:../admin/deleteTeacher.php");
}
?>
