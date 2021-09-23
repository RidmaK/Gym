<?php
include('../../php/basic/connection.php');

	$id = $_GET['id'];

	$sql="delete from payments where p_id='$id'";
	$conn->query($sql);

    echo "<script>window.location.assign('admin-Payments.php?delete=1')</script>";
?>