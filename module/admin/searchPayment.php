<?php
include_once('main.php');
$searchKey = $_GET['key'];

$sql = "SELECT * FROM payment WHERE id like '$searchKey%' OR studentid like '$searchKey%' AND month = MONTH(curdate()) AND year = YEAR(curdate())";
$re = mysqli_query($conn,$sql);
while($r = mysqli_fetch_array($re)){
    echo "<form action='deletePaymentableData.php' method='post' >";
    echo "<input type='submit' value='Delete' /> ".
    " Student ID: ".$r['studentid']." Payment Amount:".$r['amount'].
    " Month :".$r['month']." Year :".$r['year'].
    "<input type='hidden' name='id' value='".$r['id']."'/>"."";
	echo "</form></br>";
}

?>
