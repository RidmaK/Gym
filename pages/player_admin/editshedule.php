<?php
include('../../php/basic/connection.php');

	$id=$_GET['shedule'];

	$pname=$_POST['pname'];
	$res=$_POST['res'];
	

	$sql="select * from player_shedule where id='$id'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();

	

	$sql="update player_shedule set shedule_name='$pname', Res='$res' where id='$id'";
	$conn->query($sql);

    echo "<script>window.location.assign('player-Shedule.php?edit=1')</script>";
?>