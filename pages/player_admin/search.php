<?php

include('../../php/basic/connection.php');
session_start();

if (isset($_POST['search'])) {
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);



    $sql = mysqli_query($conn, "SELECT * FROM player WHERE  username like '%$searchq%'  ") or die("could not search!");
   //$row=mysqli_fetch_assoc($sql);
   $count = mysqli_num_rows($sql);
   if ($count == 0) {
       $output = 'There was no search result!';
   } else {
      
    $row=mysqli_fetch_assoc($sql);
   $_SESSION['player_id']=$row['username'];
   //echo $_SESSION['user_id'];
   header("Location:../player_admin/player-Progress.php");
	

	
   }
}

?>