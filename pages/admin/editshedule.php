<?php
include('../../php/basic/connection.php');

	$id=$_GET['shedule'];

	$pname=$_POST['pname'];
	$category=$_POST['category'];
	

	$sql="select * from shedule where sheduleid='$id'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();

	

	$sql="update shedule set shedule_name='$pname', categoryid='$category' where sheduleid='$id'";
	$conn->query($sql);

    echo "<script>window.location.assign('admin-shedule.php?edit=1')</script>";
?>