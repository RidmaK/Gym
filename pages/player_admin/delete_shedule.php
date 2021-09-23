<?php
include('../../php/basic/connection.php');

	$id = $_GET['shedule'];

	$sql="delete from player_shedule where id='$id'";
	$conn->query($sql);

    echo "<script>window.location.assign('player-Shedule.php?delete=1')</script>";
?>