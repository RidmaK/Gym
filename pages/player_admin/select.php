<?php

session_start();
include('../../php/basic/connection.php');
$user = $_SESSION['player_id'];





if (isset($_POST['selectbtn'])) {

    $id = $_POST['select_id'];

    $query = mysqli_query($conn, "SELECT * from shedule where sheduleid='{$id}'");
    $row = mysqli_fetch_assoc($query);
    $shedule = $row['shedule_name'];
    $q1 = mysqli_query($conn, "SELECT * from player_shedule where shedule_name='$shedule' and p_id='{$user}'");
    $count = mysqli_num_rows($q1);

   $day=$_POST['day'];
       for($i=0;$i<sizeof($day);$i++){
       
            $q = mysqli_query($conn, "INSERT into player_shedule(p_id,shedule_name,Day) values('$user','$shedule','$day[$i]')");
        

        // $res3 = mysqli_query($conn, "UPDATE player_shedule SET Day = '$day[$i]' WHERE player_shedule.p_id='{$user}' and player_shedule.shedule_name='$shedule'");
        if($q){
            echo "<script>window.location.assign('player-Shedule.php?edit=1')</script>";

        }else if($res3){
            echo "<script>window.location.assign('player-Shedule.php?update=1')</script>";

        }
    } 
    
}
