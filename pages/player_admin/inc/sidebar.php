<?php 

include('../../php/basic/connection.php');
$user=$_SESSION['player_id'];
$query="SELECT * FROM user where user_id='{$user}'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
?>
<style>
    .sidebar p{
        font-size: 14px;
        font-weight: bolder;
    }
</style>
<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
           
              <a href="../admin/admin-dashboard.php"> <h5 style="color: #fff;"> POWERSHEARK</h5></a>
           
                
            <a href="javascript:void(0)" class="simple-text logo-normal">
               <?php echo " ".$row['first_name']." ".$row['last_name'];?>
            </a>
        </div>
        <ul class="nav">
        <li class="s-user">
                <a href="./player-Profile.php">
                    <i class="tim-icons icon-single-02"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="s-icon">
                <a href="./player-Shedule.php">
                    <i class="tim-icons icon-atom"></i>
                    <p>Shedule</p>
                </a>
            </li>
            <li class="s-map">
                <a href="./player-Measurements.php">
                    <i class="tim-icons icon-pin"></i>
                    <p>Measurements</p>
                </a>
            </li>
            <li class="s-dashboard">
                <a href="./player-Progress.php">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Progress</p>
                </a>
            </li>
            
            <li class="s-notification">
                <a href="./player-notifications.php">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>Notifications</p>
                </a>
            </li>
            
            <li class="s-table">
                <a href="./player-Payments.php">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>Payments</p>
                </a>
            </li>
            <li class="s-typography">
                <a href="./player-Attendence.php">
                    <i class="tim-icons icon-align-center"></i>
                    <p>Attendence</p>
                </a>
            </li>
            
        </ul>
    </div>
</div>