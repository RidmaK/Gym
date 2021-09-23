<?php
include('../../php/basic/connection.php');

	$id = $_GET['id'];

	$sql="delete from player where id='$id'";
	$conn->query($sql);

    echo "<script>window.location.assign('admin-Players.php?delete=1')</script>";
?>