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
           
               <h5 style="color: #fff;"> POWERSHEARK</h5>
           
                
            <a href="javascript:void(0)" class="simple-text logo-normal">
               <?php echo "hi "; echo $row['first_name'];?>
            </a>
        </div>
        <ul class="nav">
            <li class="s-dashboard">
                <a href="./player-dashboard.php">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <!-- <li class="s-icon">
                <a href="./player-icons.php">
                    <i class="tim-icons icon-atom"></i>
                    <p>Icons</p>
                </a>
            </li> -->
            <li class="s-map">
                <a href="./player-Shedule.php">
                    <i class="tim-icons icon-pin"></i>
                    <p>Shedule</p>
                </a>
            </li>
            <li class="s-notification">
                <a href="./player-notifications.php">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="s-user">
                <a href="./player-user.php">
                    <i class="tim-icons icon-single-02"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="s-table">
                <a href="./player-attendence.php">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>Attendence</p>
                </a>
            </li>
            <li class="s-typography">
                <a href="./player-payments.php">
                    <i class="tim-icons icon-align-center"></i>
                    <p>Payments</p>
                </a>
            </li>
        </ul>
    </div>
</div>