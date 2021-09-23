<?php 

include('../../php/basic/connection.php');
$user=$_SESSION['admin_id'];
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
            
            <a href="javascript:void(0)" class="simple-text logo-normal">
            <?php echo " ".$row['user_id']?>
            </a>
        </div>
        <ul class="nav">
        <li class="s-user">
                <a href="./admin-dashboard.php">
                    <i class="tim-icons icon-single-02"></i>
                    <p>Dashboard</p>
                </a>
            </li>
        <li class="s-user">
                <a href="./admin-user.php">
                    <i class="tim-icons icon-single-02"></i>
                    <p>ADD Users</p>
                </a>
            </li>
            <li class="s-table">
                <a href="./admin-Players.php">
                    <i class="tim-icons icon-satisfied"></i>
                    <p >Players</p>
                </a>
            </li>
            <li class="s-map">
                <a href="./admin-Payments.php">
                    <i class="tim-icons icon-pin"></i>
                    <p>Payments</p>
                </a>
            </li>
            <!-- <li class="s-map">
                <a href="./admin-shedule.php">
                    <i class="tim-icons icon-pin"></i>
                    <p>Update Shedules</p>
                </a>
            </li> -->
            <li class="s-notification">
                <a href="./admin-shedule.php">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>Update Shedules</p>
                </a>
            </li>
           
            
            
        </ul>
    </div>
</div>