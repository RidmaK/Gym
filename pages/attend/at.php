<?php

include('../../php/basic/connection.php');
session_start();

$date = date('m/d/Y', time());
date_default_timezone_set('Asia/Kolkata');
$date1 = date('h:i:s');

if (isset($_POST['in'])) {
    $in_id = $_POST['in'];
   
$query=mysqli_query($conn,"SELECT * from player where username='{$in_id}'");
$row=mysqli_fetch_array($query);
$query2=mysqli_query($conn,"SELECT * FROM attendence where Date='{$date}' AND user_id='{$in_id}'");
$count=mysqli_num_rows($query2);
$r=mysqli_fetch_array($query2);
if($row['username']==$in_id){
    if( $count==0){
    $query1=mysqli_query($conn,"INSERT into attendence(user_id,Date,In_time) values('$in_id','$date','$date1')");
    echo "<script>window.location.assign('attendence.php?success=1')</script>";
}
else{

    $res3=mysqli_query($conn,"UPDATE attendence SET Out_time='$date1' WHERE attendence.user_id='{$in_id}' and attendence.Date='$date'");
    echo "<script>window.location.assign('attendence.php?successed=1')</script>";

}}else{
        echo "<script>window.location.assign('attendence.php?not=1')</script>";

}

   
}

?>