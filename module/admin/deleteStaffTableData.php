<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
if($_POST['submit']){
    $id = $_POST['id'];
    $sql = "DELETE FROM staff WHERE id = '$id';";
    $success = mysqli_query($conn,$sql );
    $sql = "DELETE FROM users WHERE userid = '$id';";
    $success = mysqli_query( $conn,$sql );
    if(!$success) {
        die('Could not Delete data: '.mysqli_error());
    }
    unlink('../images/'.$id.'.jpg');
    echo "Delete data successfully\n";
    header("Location:../admin/deleteStaff.php");
}
?>
