<?php 

include('../../php/basic/connection.php');
$user=$_SESSION['attend_id'];
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
            <?php //echo " ".$row['user_id']?>
            </a>
        </div>
        <ul class="nav">
        <li class="s-user">
                <a href="./attendence.php">
                    <i class="tim-icons icon-single-02"></i>
                    <p>Attendence</p>
                </a>
            </li>
       
        </ul>
    </div>
</div>