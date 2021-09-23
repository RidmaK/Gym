<?php
include('../../php/basic/connection.php');

	$id = $_GET['shedule'];

	$sql="delete from shedule where sheduleid='$id'";
	$conn->query($sql);

    echo "<script>window.location.assign('admin-shedule.php?delete=1')</script>";
?>